<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function menu(){
        return view('menu');
    }

    public function culture(){
        return view('our_culture');
    }

    public function about(){
        return view('about_us');
    }

    public function contact(){
        return view('contact_us');
    }
}
