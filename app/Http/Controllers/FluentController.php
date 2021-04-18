<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FluentController extends Controller
{
    public function index(){
        echo "<h1>String content</h1>";
        $slice = Str::of('Welcome to my youtube chennel')->after('Welcome to');
        echo $slice."<br>";

        $slice2 = Str::of('App\Http\Controllers\Controller')->afterLast('\\');
        echo $slice2." Something"."<br>"; 

        $string = Str::of('Hellow')->append('World');
        echo $string."<br>";

        $result = Str::of('LARAVEL 8')->lower();
        echo $result."<br>"; 

        $replace = Str::of('laravel 7.0')->replace('7.0', '8.0');
        echo $replace;
    }
}
