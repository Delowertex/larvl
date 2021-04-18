<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create(){
        
    }
    public function index(){
        return view('login');
    }

    public function loginSubmit(Request $request){
        $validatedata = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|max:12'                                                                
        ]);
        $email = $request->input('email');
        $password = $request->input('password');
        return "Email is: ".$email. "<br>"." Password is: ".$password;
    }
}
