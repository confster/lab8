<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    public function index(){

        return view('main');
        
    }

    public function showUploadedFile(Request $request){
        $file = $request->file('image');

        echo 'File name: '.$file->getClientOriginalName();
    
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());
    }


}
