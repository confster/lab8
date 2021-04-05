<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function send(){
        $objDemo= new \stdClass();
        $objDemo->demo_one = 'Demo One Value';
        $objDemo->demo_two = 'Demo Two Value';
        $objDemo->sender = 'Muhammed.Yilmaz';
        $objDemo->receiver = 'Muhammed.Yilmaz';
        
        Mail::to("rockinretrocom@gmail.com")->sende(new DemoEmail($objDemo));
    }
}
