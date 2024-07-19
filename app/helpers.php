<?php

    function count_unread_messages($emp_id){
        $messages = DB::table('messages') 
        ->where('msg_to','=',$emp_id)
        ->where('acc_id','=',session('acc_id'))
        ->where('msg_to_active','=','1')
        ->where('msg_is_read','=','0')
        ->count();

    return $messages;
}

    function record_success_login($emp_id)
    {
        DB::table('login_logs')  
        ->insert([ 
            'acc_id' => session('acc_id'),
            'log_date' => DB::raw('CURRENT_TIMESTAMP'), 
            'emp_id' => $emp_id,
            'log_ip' => \Request::ip()
        ]); 
    }

    function record_failed_login($email,$password)
    {
        DB::table('login_failed_logs')  
        ->insert([
            'acc_id' => session('acc_id'),
            'log_date' => DB::raw('CURRENT_TIMESTAMP'),
            'email' => $email,
            'password' => $password,
            'log_ip' => \Request::ip() 
        ]); 
    }

    function get_avatar($emp_id)
    {
        try{
            $employee=DB::table('employees')
            ->where('emp_id','=',$emp_id)
            ->first(); 

            if($employee->emp_image <> ''){
                return 'images/employees/' . $employee->emp_image; 
            }else{
                return 'bootstrap/admin/dist/img/avatar5.png';
            }
            
        }catch (Exception $e){
            return 'bootstrap/admin/dist/img/avatar5.png';
        }
    }

    function get_last_news_count()
    {
        $news = DB::table('news')->count();
        return $news+1;
    }

    function get_last_file_downloads_count()
    {
        $file_downloads = DB::table('file_downloads')->count();
        return $file_downloads+1;
    }

    function get_employee_name($emp_id)
    {
        $employee = DB::table('employees')
        ->where('emp_id','=',$emp_id)
        ->first();

        if($employee){
            return $employee->emp_last_name . ' ' .  $employee->emp_first_name;
        }else{
            return '';
        }
    }

    function get_employee_name_by_uuid($emp_uuid)
    {
        $employee = DB::table('employees')
        ->where('emp_uuid','=',$emp_uuid)
        ->first();

        if($employee){
            return $employee->emp_last_name . ' ' .  $employee->emp_first_name;
        }else{
            return '';
        }
    }

    function set_user_roles($emp_id)
    {
        $modules = DB::table('modules')
        ->where('mod_active','=','1')
        ->get();

        foreach($modules as $module)
        {
            session([$module->mod_name => false]);
        }

        $employee_modules = DB::table('employee_modules')
        ->join('modules','modules.mod_id','=','employee_modules.mod_id')
        ->where('employee_modules.emp_id','=',$emp_id)
        ->get();

        foreach($employee_modules as $employee_module)
        {
            session([$employee_module->mod_name => true]);
        }
    }

    function save_user_login($emp_id)
    {
        DB::table('user_logs')
        ->insert([
            'usr_id' => $emp_id,
            'log_date' => DB::raw('CURRENT_TIMESTAMP'),
            'ip_address' => \Request::ip()
        ]); 
    }

    function siteHit()
    {
        DB::table('sitehitusers')
        ->insert([ 
            'usrIP' => \Request::ip(),
            'usrDate' => DB::raw('CURRENT_TIMESTAMP')
        ]); 
            
        $sitehit = DB::table('sitehits')
        ->whereDate('hitDate' ,'=', date("Y-m-d"))
        ->first();

        if($sitehit){
            DB::table('sitehits')
            ->where('hitID','=', $sitehit->hitID)
            ->increment("hitCount", 1);
            
        }else{
            DB::table('sitehits')
            ->insert([ 
                'hitDate' => date("Y-m-d"),
                'hitCount' => 1
            ]); 
        }
    }

    function getLastUserLogin($usr_id)
    {
        $user_log = DB::table('user_logs')
        ->where('usr_id','=',$usr_id)
        ->orderby('log_date','desc')
        ->first();

        if($user_log){
            return $user_log->log_date;
        }else{
            '';
        }
    }

    function generateuuid()
    { 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $string = '';

        for ($i = 0; $i < 32; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }

        return $string;
    }

    function sendSMS($sms_number, $sms_content)
    {
        $response = Http::withHeaders(['apiKey' => 'infinitlms2017',])
        ->post('https://www.infinitwebsolutions.com/api/sms/save',
            [
                'mobile' => $sms_number,
                'message' => $sms_content,
                'priority' => '1'
            ]
        )->throw()->json();
    }

    function getVersionNumber()
    {
        $version = DB::table('versions')
        ->orderby('ver_id','desc')
        ->first();

        return $version->ver_id;
    }

    function getVersionDate()
    {
        $version = DB::table('versions')
        ->orderby('ver_id','desc')
        ->first();

        return $version->ver_date;
    }
?>