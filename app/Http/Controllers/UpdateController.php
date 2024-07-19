<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UpdateController extends Controller
{
    public function main()
    {
        $versions = DB::table('versions')
        ->join('employees','employees.emp_id','=','versions.emp_id')
        ->orderBy('ver_date','desc')
        ->get();

        return view('admin.update.main',compact('versions'));
    }

    public function save(Request $request)
    {
        DB::table('versions')
        ->insert([
            'ver_details' => $request->ver_details,
            'ver_date' => DB::raw('CURRENT_TIMESTAMP'),
            'emp_id' => session('emp_id')
        ]);  

        session()->flash('successMessage', 'New update has been recorded.');
        return redirect()->action('UpdateController@main');
    }

    public function delete($ver_id)
    {
        DB::table('versions')
        ->where('ver_id','=',$ver_id)
        ->delete();  

        session()->flash('successMessage', 'Update has been deleted.');
        return redirect()->action('UpdateController@main');
    }
}
