<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sitecontroller extends Controller
{
    function index(){
        return view('site.index');
    }

    function about(){
        return view('site.about');
    }
    function menu(){
        return view('site.menu');
    }
    function reservation(){
        return view('site.reservation');
    }
}
