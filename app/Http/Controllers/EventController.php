<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use Session;
use DB; 

class EventController extends Controller
{
    public function save(Request $request)
    {
        $evt_title = $request->evt_title;
        $evt_details = $request->evt_details;
        $evt_color = $request->evt_color;
        $evt_is_whole_day = $request->evt_is_whole_day;
        $evt_start_date = $request->evt_start_date;
        $evt_start_time = $request->evt_start_time;
        $evt_end_date = $request->evt_end_date;
        $evt_end_time = $request->evt_end_time;
        $evt_start_date = $evt_start_date . " " . $evt_start_time;
        $evt_end_date = $evt_end_date . " " . $evt_end_time;

        if($evt_is_whole_day){
            $evt_is_whole_day = 'true';
        }else{
            $evt_is_whole_day = 'false';
        }

        DB::table('events')
        ->insert([
            'acc_id' => session('acc_id'),
            'evt_uuid' => generateuuid(),
            'evt_title' => $evt_title,
            'evt_details' => $evt_details,
            'evt_color' => $evt_color,
            'evt_is_whole_day' => $evt_is_whole_day,
            'evt_start_date' => $evt_start_date,
            'evt_end_date' => $evt_end_date,
            'evt_date_created' =>DB::raw('CURRENT_TIMESTAMP'),
            'evt_created_by' => session('emp_id'),
            'evt_active' =>'1'
        ]);  

        session()->flash('successMessage', 'An event has been created.');
        return redirect()->action('EventController@main');
    } 

    public function delete($evt_uuid)
    {
        DB::table('events')
            ->where('evt_uuid','=',$evt_uuid)
            ->update([
                'evt_active' =>'0'
            ]);  

        session()->flash('successMessage', 'An event has been deleted.');
        return redirect()->action('EventController@main');
    } 

    public function main()
    {
        $events = [];
        $data = DB::table('events')
            ->where('acc_id','=',session('acc_id'))
            ->where('evt_active','=','1')
            ->get();
        
        if($data->count()) {
            foreach ($data as $key => $value) {
                if($value->evt_is_whole_day=='true') { $xyz=true; }else{ $xyz=false; }
                $events[] = Calendar::event( 
                    $value->evt_title,
                    $xyz,
                    new \DateTime($value->evt_start_date),
                    new \DateTime($value->evt_end_date),
                    $value->evt_uuid,
                    [
                        'color' => $value->evt_color,
                        'url' => '/calendar/details/' . $value->evt_uuid,
                    ]
                );
            }
        }
      
        $calendar = Calendar::addEvents($events)
            ->setOptions([
                'contentHeight' => 550,
                'themeSystem' => 'standard',
                'aspectRatio' => 1
            ]);

        return view('admin.events.main',compact('calendar'));
    } 

    public function details($evt_uuid)
    {
        $event = DB::table('events')
            ->where('evt_uuid','=',$evt_uuid)
            ->first();

        return view('admin.events.details',compact('event'));
    }
}
