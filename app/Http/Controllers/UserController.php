<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function main()
    {
        $employee = DB::table('employees')
        ->where('emp_id','=',session('emp_uuid'))
        ->first();

        return view('admin.users.main',compact('employee'));
    }
}
