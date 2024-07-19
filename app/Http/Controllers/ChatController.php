<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChatController extends Controller
{
    public function chatRefresh()
    {
        header('Content-Type','application/json');
        
        $chats = DB::table('chats')
        ->join('employees','employees.emp_id','=','chats.emp_id')
        ->where('chats.acc_id', '=', session('acc_id'))
        ->where('chats.cht_active', '=', '1')
        ->orderby('chats.cht_date_created','desc')
        ->limit('25')
        ->get();
        
        return view('admin.chat',compact('chats'));
    }

    public function send(Request $request)
    {
        $cht_message = $request->cht_message;

        DB::table('chats')
        ->insert([
            'acc_id' => session('acc_id'),
            'cht_message' => $cht_message,
            'cht_date_created' =>DB::raw('CURRENT_TIMESTAMP'),
            'emp_id' => session('emp_id'),
            'cht_active' =>'1'
        ]);  
        
        return redirect()->action('MainController@home');
    }

    public function delete($cht_id)
    {
        DB::table('chats')
        ->where('cht_id','=',$cht_id)
        ->update([
            'cht_active' => '0'
        ]);  
        
        return redirect()->action('MainController@home');
    }
}
