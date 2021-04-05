<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Webuser;

class WebuserController extends Controller
{

    

    public function index(){
        $webuser = Webuser::all();

        return view('file_upload');
        
    }

    public function showUploadedFile(Request $request){
        $file = $request->file('image');

        echo 'File name: '.$file->getClientOriginalName();
    
        $destinationPath = 'uploads';
        $file->move($destinationPath, $file->getClientOriginalName());
    }

    public function store(Request $request) {
        Webuser::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'image' => $request->image
            
        ]);
            return back();
        
    }

}