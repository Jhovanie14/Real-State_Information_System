<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function main()
    {
        $users = DB::table('users')
        ->orderBy('usr_name','asc')
        ->get();

        return view('admin.users.main',compact('users'));
    }

    public function activate($usr_id)
    {
        DB::table('users')
        ->where('usr_id','=',$usr_id)
        ->update([
            'usr_active' => '1'
        ]); 

        session()->flash('successMessage', 'User has been reactivated');
        return redirect()->action('UserController@main');
    }

    public function deactivate($usr_id)
    {
        DB::table('users')
        ->where('usr_id','=',$usr_id)
        ->update([
            'usr_active' => '0'
        ]); 

        session()->flash('successMessage', 'User has been deactivated');
        return redirect()->action('UserController@main');
    }

    public function create()
    {
        $departments = DB::table('departments')
        ->orderBy('dep_name','asc')
        ->get();

        $roles = DB::table('roles')
        ->orderBy('rol_name','asc')
        ->get();

        return view('admin.users.create',compact('departments','roles'));
    }

    public function view($usr_id)
    {
        $user = DB::table('users')
        ->where('usr_id','=',$usr_id)
        ->first();

        $departments = DB::table('departments')
        ->orderBy('dep_name','asc')
        ->get();

        $roles = DB::table('roles')
        ->orderBy('rol_name','asc')
        ->get();

        return view('admin.users.edit',compact('departments','roles','user'));
    }

    public function save(Request $request)
    {
        $usr_code = $request->usr_code;
        $usr_name = $request->usr_name;
        $rol_ids = $request->rol_id;
        $dep_ids = $request->dep_id;

        $usr_id = DB::table('users')
        ->insertGetId([
            'usr_code' => $usr_code,
            'usr_name' => $usr_name,
            'usr_active' => '1'
        ]); 

        foreach($rol_ids as $rol_id){

            DB::table('user_roles')
            ->insert([
                'usr_id' => $usr_id,
                'rol_id' => $rol_id
            ]); 

        }

        foreach($dep_ids as $dep_id){
            
            DB::table('user_departments')
            ->insert([
                'usr_id' => $usr_id,
                'dep_id' => $dep_id
            ]); 

        }

        session()->flash('successMessage', 'User has been created');
        return redirect()->action('UserController@main');
    }

    public function update(Request $request)
    {
        $usr_id = $request->usr_id;
        $usr_code = $request->usr_code;
        $usr_name = $request->usr_name;
        $rol_ids = $request->rol_id;
        $dep_ids = $request->dep_id;

        DB::table('users')
        ->where('usr_id','=',$usr_id)
        ->update([
            'usr_code' => $usr_code,
            'usr_name' => $usr_name,
            'usr_active' => '1'
        ]); 

        DB::table('user_roles')
        ->where('usr_id','=',$usr_id)
        ->delete(); 

        foreach($rol_ids as $rol_id){

            DB::table('user_roles')
            ->insert([
                'usr_id' => $usr_id,
                'rol_id' => $rol_id
            ]); 

        }

        DB::table('user_departments')
        ->where('usr_id','=',$usr_id)
        ->delete(); 

        foreach($dep_ids as $dep_id){
            
            DB::table('user_departments')
            ->insert([
                'usr_id' => $usr_id,
                'dep_id' => $dep_id
            ]); 

        }

        session()->flash('successMessage', 'User has been updated');
        return redirect()->action('UserController@main');
    }
}
