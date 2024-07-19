<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Session;
use DB; 

class NewsController extends Controller
{
    public function save(Request $request)
    {
        $nws_image = $request->file('nws_image');

        if(isset($nws_image)) 
        {
            $validator = Validator::make($request->all(), [
                'nws_image' => 'required|image|mimes:jpeg,jpg,png|max:1024',
            ]);
        
            if ($validator->fails()) {
                session()->flash('errorMessage', 'Invalid file attachment.');
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            $fileName = get_last_news_count() . '.' . $nws_image->getClientOriginalExtension();
             
            DB::table('news')
            ->insert([
                'nws_uuid' => generateuuid(),
                'acc_id' => session('acc_id'), 
                'nws_title' => $request->nws_title, 
                'nws_content' => $request->nws_content, 
                'nws_image' => $fileName,
                'nws_date_created' => DB::raw('CURRENT_TIMESTAMP'),
                'nws_created_by' => session('emp_id') 
            ]);

            Storage::disk('local')->put('/images/news/' . $fileName, fopen($nws_image, 'r+'));

        } else {
            DB::table('news')
            ->insert([
                'nws_uuid' => generateuuid(),
                'acc_id' => session('acc_id'), 
                'nws_title' => $request->nws_title, 
                'nws_content' => $request->nws_content, 
                'nws_date_created' => DB::raw('CURRENT_TIMESTAMP'),
                'nws_created_by' => session('emp_id')
            ]);
        }

        session()->flash('successMessage', 'Announcement successfully created.');
        return redirect()->action('MainController@home');
    }

    public function delete($nws_id)
    {
        DB::table('news')
        ->where('nws_id','=',$nws_id)
        ->update([
            'nws_active' => '0'
        ]);

        session()->flash('successMessage', 'Announcement/News article has been deleted.');
        return redirect()->action('MainController@home');
    }
}
