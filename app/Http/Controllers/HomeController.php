<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($nome = null){
        return "Hi from home Controller name is name".$nome;
    }
}
