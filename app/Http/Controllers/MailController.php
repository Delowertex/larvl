<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function create(){
        
    }

    public function sendEmail(){
        $details = [
            'title' => 'Mail from Serface Media',
            'body' => 'This is for testing email using gmail'
        ];
        Mail::to("delower.tex30@gmail.com")->send(new TestMail($details));
        return "Mail send";
    }
}
