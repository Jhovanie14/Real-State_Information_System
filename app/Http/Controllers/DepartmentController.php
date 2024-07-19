<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
{
    public function main()
    {
        $departments = DB::table('departments')
        ->orderBy('branch_id','asc')
        ->orderBy('dep_name','asc')
        ->get();

        return view('admin.departments.main',compact('departments'));
    }  
    
    public function activate($dep_id)
    {
        DB::table('departments')
        ->where('dep_id','=',$dep_id)
        ->update([
            'dep_active' => '1'
        ]); 

        session()->flash('successMessage', 'Department has been reactivated');
        return redirect()->action('DepartmentController@main');
    }

    public function deactivate($dep_id)
    {
        DB::table('departments')
        ->where('dep_id','=',$dep_id)
        ->update([
            'dep_active' => '0'
        ]); 

        session()->flash('successMessage', 'Department has been deactivated');
        return redirect()->action('DepartmentController@main');
    }

    public function save(Request $request)
    {
        $dep_name = $request->dep_name;
        $dep_full_name = $request->dep_full_name;
        $branch_id = $request->branch_id;

        DB::table('departments')
        ->insert([
            'dep_name' => $dep_name,
            'dep_full_name' => $dep_full_name,
            'branch_id' => $branch_id,
            'dep_active' => '1'
        ]); 

        session()->flash('successMessage', 'Department has been created');
        return redirect()->action('DepartmentController@main');
    }

    public function update(Request $request)
    {
        $dep_id = $request->dep_id;
        $dep_name = $request->dep_name;
        $dep_full_name = $request->dep_full_name;
        $branch_id = $request->branch_id;

        DB::table('departments')
        ->where('dep_id','=',$dep_id)
        ->update([
            'dep_name' => $dep_name,
            'dep_full_name' => $dep_full_name,
            'branch_id' => $branch_id,
            'dep_active' => '1'
        ]); 

        session()->flash('successMessage', 'Department has been updated');
        return redirect()->action('DepartmentController@main');
    }
}
