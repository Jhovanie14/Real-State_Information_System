<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Broker;
use App\Models\Client;
use App\Models\Employee;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/home/main');
        }

        return view('login.main');
    }

    public function authenticate(Request $request)
    {
        $credentials =  $request->validate([
            'emp_email' => 'required|email',
            'emp_password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home/main');
        }

        return redirect()->back()->with('errorMessage', 'Invalid credentialsssss');
    }

    public function register_apol()
    {
        $user = Employee::create([
            'emp_uuid' => Str::uuid(),
            'acc_id' => 1,
            'emp_email' => 'test@test.com',
            'emp_password' => md5('test1234'),
            // 'emp_password' => Hash::make('test1234'),
            'emp_last_name' => 'Apolonio',
            'emp_first_name' => 'James Patrick',
            'emp_middle_name' => 'Javier',
            'emp_ext_name' => null,
            'emp_date_of_birth' => Carbon::now(),
            'emp_place_of_birth' => 'Davao City',
            'emp_gender' => 'Male',
            'emp_address' => '084-1 Km.5 Buhangin Road, Davao City',
            'emp_mobile' => '09611179244',
            'emp_image' => null,
            'pos_id' => 1,
            'emp_created_by' => 1,
            'emp_updated_by' => 1,
        ]);
        // $user = User::create([
        //     'uuid' => Str::uuid(),
        //     'id' => 1,
        //     'email' => 'test@test.com',
        //     // 'password' => md5('test1234'),
        //     'password' => Hash::make('test1234'),
        //     'last_name' => 'Apolonio',
        //     'first_name' => 'James Patrick',
        //     'middle_name' => 'Javier',
        //     'ext_name' => null,
        //     'date_of_birth' => Carbon::now(),
        //     'place_of_birth' => 'Davao City',
        //     'gender' => 'Male',
        //     'address' => '084-1 Km.5 Buhangin Road, Davao City',
        //     'mobile' => '09611179244',
        //     'image' => null,
        //     'id' => 1,
        //     'created_by' => 1,
        //     'updated_by' => 1,
        // ]);

        return redirect()->back()->with('successMessage', 'Registered successfully');
    }

    public function register_client()
    {
        $broker = Broker::create([
            'uuid' => Str::uuid(),
            'name' => "Patrick Javier",
            'address' => '084-1 Km. 5 Buhangin Road, Davao City',
            'prc_license' => '12312',
            'tin_no' => '321312',
            'contact_no' => '09611179244',
            'email' => 'patrick@gmail.com',
            'image' => null,
            'brokerage_firm' => "Heaven's Place Brokerage Firm",
            'brokerage_address' => 'Buhangin, Davao City',
            'brokerage_tin_no' => '312312312',
            'brokerage_contact_no' => '4324234',
            'brokerage_email' => 'heavensplace@gmail.com',
            'created_by' => 1,
        ]);

        $agent = Agent::create([
            'uuid' => Str::uuid(),
            'broker_id' => $broker->id,
            'name' => 'Hesu Crypto',
            'contact' => '09611179244',
            'email_address' => 'test@test.com',
            'created_by' => session('emp_id')
        ]);

        $client = Client::create([
            'uuid' => Str::uuid(),
            // 'broker_id' => $broker->id,
            'agent_id' => $agent->id,
            'image' => null,
            'last_name' => 'Apolonio',
            'first_name' => 'James Patrick',
            'middle_name' => 'Javier',
            'suffix' => null,
            'present_address' => '084-1 Km.5 Buhangin Road, Davao City',
            'contact_no' => '09611179244',
            'gender' => 'Male',
            'marital_status' => 'Married',
            'date_of_birth' => '1996-01-27',
            'place_of_birth' => 'Davao City',
            'nationality' => 'Filipino',
            'religion' => 'Atheist',
            'pagibig_no' => '1321312',
            'sss_no' => '3232132',
            'gsis_no' => '321312312',
            'tin_no' => '564356435',
            'passport_no' => '4324325',
            'passport_validity' => '1999-01-01',
            'passport_expiration_date' => '2099-01-01',
            'email' => 'james.apoloz27@gmail.com',
            'facebook' => 'James Patrick Apolonio',
            'messenger' => 'James Patrick Apolonio',
            'viber' => null,
            'other_social' => null,
            'residence_status' => 'Owned',
            'monthly_rental' => null,
            'years_of_stay' => 27,
            'created_by' => 1,
        ]);


        return redirect()->back()->with('successMessage', 'Client and broker registered successfully');
    }

    public function clear_storage()
    {
        Storage::deleteDirectory('/storage/app/public/agentImages');
        Storage::deleteDirectory('public/brokerImages');
        Storage::deleteDirectory('public/clientImages');
        Storage::deleteDirectory('public/spouseImages');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
