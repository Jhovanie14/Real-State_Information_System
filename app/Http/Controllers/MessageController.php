<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;

class MessageController extends Controller
{
    public function main() 
    {
        $messages = DB::table('messages') 
        ->where('msg_to','=',session('emp_uuid'))
        ->where('acc_id','=',session('acc_id'))
        ->where('msg_to_active','=','1')
        ->orderBy('msg_date','desc')
        ->get(); 

        return view('admin.messages.main',compact('messages')); 
    }

    public function mainSet($emp_uuid) 
    {
        $messages = DB::table('messages') 
        ->where('msg_to','=',session('emp_uuid'))
        ->where('acc_id','=',session('acc_id'))
        ->where('msg_to_active','=','1')
        ->orderBy('msg_date','desc')
        ->get(); 

        return view('admin.messages.main',compact('messages','emp_id')); 
    }

    public function compose() 
    {
        $employees = DB::table('employees') 
        ->where('acc_id','=',session('acc_id'))
        ->where('emp_active','=','1')
        ->orderBy('emp_last_name','asc')
        ->orderBy('emp_first_name','asc')
        ->get(); 

        return view('admin.messages.compose',compact('employees')); 
    }

    public function outbox() 
    {
        $messages = DB::table('messages') 
        ->where('msg_from','=',session('emp_uuid'))
        ->where('acc_id','=',session('acc_id'))
        ->where('msg_from_active','=','1')
        ->orderBy('msg_date','desc')
        ->get(); 

        return view('admin.messages.sent',compact('messages')); 
    }

    public function sendMultiple(Request $request)
    {
        $msg_subject=$request->msg_subject;
        $msg_content=$request->msg_content;
        $msg_to=$request->msg_to;

        if(is_array($msg_to)){
            foreach ($msg_to as $emp_uuid) {
                DB::table('messages')
                ->insert([
                    'msg_uuid' => generateuuid(), 
                    'msg_subject' => $msg_subject, 
                    'msg_content' => $msg_content, 
                    'msg_to' => $emp_uuid, 
                    'msg_from' => session('emp_uuid'), 
                    'acc_id' => session('acc_id'), 
                    'msg_date' => DB::raw('CURRENT_TIMESTAMP'), 
                    'msg_is_read' => '0', 
                    'msg_from_active' => '1', 
                    'msg_to_active' => '1'
                ]);
                // sendSMSbyUsrID($usrID, 'You have received 1 private message on your LMS account.', '2');
            }
        }
        session()->flash('successMessage',  "Message sent.");
        return redirect()->action('MessageController@main');
    }

    public function sendSingle(Request $request)
    {
        $msg_subject=$request->msg_subject;
        $msg_content=$request->msg_content;
        $msg_to=$request->msg_to;

        DB::table('messages')
        ->insert([
            'msg_uuid' => generateuuid(), 
            'msg_subject' => $msg_subject, 
            'msg_content' => $msg_content, 
            'msg_to' => $msg_to, 
            'msg_from' => session('emp_uuid'), 
            'acc_id' => session('acc_id'), 
            'msg_date' => DB::raw('CURRENT_TIMESTAMP'), 
            'msg_is_read' => '0', 
            'msg_from_active' => '1', 
            'msg_to_active' => '1'
        ]);

        // sendSMSbyUsrID($msgTo, 'You have received 1 private message on your LMS account.', '2');

        session()->flash('successMessage',  "Message sent.");
        return redirect()->action('MessageController@main');
    }

    public function read($msg_uuid) 
    {
        DB::table('messages')
        ->where('msg_uuid','=',$msg_uuid)
        ->update([
            'msg_is_read' => '1',
            'msg_date_read' => DB::raw('CURRENT_TIMESTAMP'), 
            ]);
            
        $message = DB::table('messages') 
        ->where('msg_uuid','=',$msg_uuid)
        ->first(); 

        return view('admin.messages.read',compact('message')); 
    }

    public function deleteTo($msg_uuid) 
    {
        DB::table('messages')
        ->where('msg_uuid','=',$msg_uuid)
        ->update([
            'msg_to_active' => '0'
            ]);

        session()->flash('successMessage', "Message has been deleted.");
        return redirect()->action('MessageController@main');
    }

    public function deleteFrom($msg_uuid) 
    {
        DB::table('messages')
        ->where('msg_uuid','=',$msg_uuid)
        ->update([
            'msg_from_active' => '0'
        ]);

        session()->flash('successMessage', "Message has been deleted.");
        return redirect()->action('MessageController@sent');
    }

    public function reply($msg_uuid) 
    {       
        $message = DB::table('messages') 
        ->where('msg_uuid','=',$msg_uuid)
        ->first(); 

        return view('admin.messages.reply',compact('message')); 
    }

    public function forward($msg_uuid) 
    {       
        $message = DB::table('messages') 
        ->where('msg_uuid','=',$msg_uuid)
        ->first(); 

        $employees = DB::table('employees') 
        ->where('acc_id','=',session('acc_id'))
        ->where('emp_active','=','1')
        ->orderBy('emp_last_name','asc')
        ->orderBy('emp_first_name','asc')
        ->get(); 

        return view('admin.messages.forward',compact('message','employees')); 
    }

    public function readSent($msg_uuid) 
    {    
        $message = DB::table('messages') 
        ->where('msg_uuid','=',$msg_uuid)
        ->first(); 

        return view('admin.messages.readonly',compact('message')); 
    }

    public function sent() 
    {
        $messages = DB::table('messages') 
        ->where('msg_from','=',session('emp_uuid'))
        ->where('acc_id','=',session('acc_id'))
        ->where('msg_from_active','=','1')
        ->orderBy('msg_date','desc')
        ->get(); 

        return view('admin.messages.sent',compact('messages')); 
    }
}
