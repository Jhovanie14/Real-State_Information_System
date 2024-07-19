<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Response;
use DB;

class DownloadController extends Controller
{
    public function main()
    {
        $file_downloads = DB::table('file_downloads')
        ->where('acc_id','=',session('acc_id'))
        ->where('fle_active','=','1')
        ->orderBy('fle_date_created','desc')
        ->get();

        return view('admin.files.main',compact('file_downloads'));
    }

    public function save(Request $request)
    {
        $file = $request->file('fle_file');
        $validator = Validator::make( 
            [
                'file' => $file,
                'extension' => strtolower($file->getClientOriginalExtension()),
            ],
            [
                'file' => 'required',
                'file' => 'max:5120', //5MB
                'extension' => 'required|in:zip,rar,jpg,png,gif,txt,doc,docx,xls,xlsx,ppt,pptx,pdf',
            ]
        );
        
        if ($validator->fails()) {
            session()->flash('errorMessage',  "Invalid File Extension or maximum size limit of 5MB reached!");
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $fileName = get_last_file_downloads_count() . '.' . $file->getClientOriginalExtension();

        Storage::disk('local')->put('/files/file_downloads/' . $fileName, fopen($file, 'r+'));

        DB::table('file_downloads')
        ->insert([
            'acc_id' => session('acc_id'),
            'fle_uuid' => generateuuid(),
            'fle_title' => $request->fle_title,
            'fle_description' => $request->fle_description,
            'fle_file' => $fileName,
            'fle_date_created' =>DB::raw('CURRENT_TIMESTAMP'),
            'fle_created_by' => session('emp_id'),
            'fle_active' =>'1'
        ]);  

        session()->flash('successMessage', 'File has been uploaded.');
        return redirect()->action('DownloadController@main');
    }

    public function download($fle_file)
    {
        $contents = Storage::disk('local')->get('files/file_downloads/' . $fle_file);       
        if (ob_get_contents()) ob_end_clean();
        return Response::make($contents, '200', array( 
            'Content-Type' => 'application/octet-stream',
            'Content-Disposition' => 'attachment; filename=' . $fle_file
        )); 
    }

    public function remove($fle_uuid)
    {
       
        DB::table('file_downloads')
        ->where('fle_uuid','=',$fle_uuid)
        ->update([
            'fle_modified_by' =>DB::raw('CURRENT_TIMESTAMP'),
            'fle_modified_by' => session('emp_id'),
            'fle_active' =>'0'
        ]);  

        session()->flash('successMessage', 'File has been deleted.');
        return redirect()->action('DownloadController@main');
    }
}
