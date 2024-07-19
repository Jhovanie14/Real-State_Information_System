<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        if (session()->haS('emp_id')) {
            // session()->flash('errorMessage', 'You are already logged in')
            return redirect('/home/main');
        } else {
            return view('login.main');
        }
    }

    public function validateUser(Request $request)
    {
        $emp_email = $request->email;
        $emp_password = $request->password;

        // $email = $request->email;
        // $password = $request->password;

        // $user = User::whereEmail($email)->first();

        // if ($user && $user->active == 1) {
        //     if (Auth::attempt([
        //         'email' => $email,
        //         'password' => $password
        //     ])) {
        //         $request->session()->regenerate();

        //         record_success_login($user->id);
        //         return redirect()->action('MainController@home');
        //     } else {
        //         record_failed_login($user->email, $user->password);
        //         return redirect()->action('LoginController@login');
        //     }
        // }else {
        //     return redirect()->back()->with('errorMessage', 'Invalid Credentials.');
        // }


        $employee = DB::table('employees')
            // ->join('accounts', 'accounts.acc_id', '=', 'employees.acc_id')
            // ->join('positions', 'positions.pos_id', 'employees.pos_id')
            ->where('employees.emp_email', '=', $emp_email)
            ->where('employees.emp_password', '=', md5($emp_password))
            ->first();

        if ($employee) {
            if ($employee->emp_active == '1') {
                if ($employee->emp_active == '1') {
                    set_user_roles($employee->emp_id);
                    save_user_login($employee->emp_id);

                    session(['emp_id' => $employee->emp_id]);
                    // session(['pos_name' => $employee->pos_name]);
                    session(['emp_mobile' => $employee->emp_mobile]);
                    session(['emp_email' => $employee->emp_email]);
                    session(['emp_first_name' => $employee->emp_first_name]);
                    session(['emp_middle_name' => $employee->emp_middle_name]);
                    session(['emp_last_name' => $employee->emp_last_name]);
                    session(['emp_gender' => $employee->emp_gender]);
                    session(['emp_date_of_birth' => $employee->emp_date_of_birth]);
                    session(['emp_place_of_birth' => $employee->emp_place_of_birth]);
                    session(['emp_address' => $employee->emp_address]);
                    session(['emp_full_name' => $employee->emp_last_name . ', ' . $employee->emp_first_name]);
                    session(['emp_image' => $employee->emp_image]);
                    session(['emp_uuid' => $employee->emp_uuid]);
                    session(['emp_active' => $employee->emp_active]);
                    // session(['acc_uuid' => $employee->acc_uuid]);
                    // session(['acc_id' => $employee->acc_id]);
                    // session(['acc_name' => $employee->acc_name]);
                    // session(['acc_image' => $employee->acc_image]);
                    // session(['acc_website' => $employee->acc_website]);

                    record_success_login($employee->emp_id);
                    return redirect()->action('MainController@home');
                } else {
                    record_failed_login($emp_email, $emp_password);
                    session()->flash('errorMessage', 'Organization account is inactive. Please contact your HR.');
                    return redirect()->action('LoginController@login');
                }
            } else {
                record_failed_login($emp_email, $emp_password);
                session()->flash('errorMessage', 'Employee is inactive. Please contact your HR.');
                return redirect()->action('LoginController@login');
            }
        } else {
            record_failed_login($emp_email, $emp_password);
            session()->flash('errorMessage', 'Invalid email or password');
            return redirect()->action('LoginController@login');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect()->action('LoginController@login');
    }
}
