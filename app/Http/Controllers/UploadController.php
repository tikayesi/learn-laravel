<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(){
        return view('upload');
    }

    public function proses_upload(Request $request){
        $this->validate($request, [
            'file' => 'required',
            'keterangan' => 'required'
        ]);

        $file = $request->file('file');

        echo 'File Name: '.$file->getClientOriginalName();
        echo '<br>';

        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';

        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        echo 'File Size: '.$file->getSize();
        echo '<br>';

        echo 'File Mime Type: '.$file->getMimeType();

        $upload_purpose = 'data_file';

        $file->move($upload_purpose, $file->getClientOriginalName());
    }
}
