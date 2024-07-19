<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function home()
    {
        $login_logs = DB::table('login_logs')
        ->join('employees','employees.emp_id','=','login_logs.emp_id')
        ->whereDate('login_logs.log_date', '=', Carbon::today())
        ->where('login_logs.acc_id', '=', session('acc_id'))
        ->orderby('login_logs.log_date','desc')
        ->groupby('login_logs.emp_id') 
        ->limit('10')
        ->get();

        $chats = DB::table('chats')
        ->join('employees','employees.emp_id','=','chats.emp_id')
        ->where('chats.acc_id', '=', session('acc_id'))
        ->where('chats.cht_active', '=', '1')
        ->orderby('chats.cht_date_created','desc')
        ->limit('25')
        ->get();

        $news = DB::table('news') 
        ->where('nws_active','=','1')
        ->where('acc_id','=',session('acc_id'))
        ->orderBy('nws_date_created','desc')
        ->get(); 

        return view('admin.main',compact('news','chats','login_logs')); 
    }
}
