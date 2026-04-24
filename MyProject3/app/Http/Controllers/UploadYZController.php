<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadYZController extends Controller
{
    //
    public function show(){
        return view('UploadYZ');
    }
    public function upload(Request $request){
        //Request data Retrieval method1
        $file=$request->file('file');
        echo "Successfully Uploaded: ".$file->getClientOriginalName();
        $file->store('');
        return "<br>File Successfully uploaded and saved";
    }
}