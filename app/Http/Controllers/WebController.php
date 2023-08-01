<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home()
    {

        return view('home');

    }

    public function about()
    {

        return view('about');

    }

    public function blog()
    {

        return view('blog');

    }

    public function contact()
    {

        return view('contact');

    }

    public function features()
    {

        return view('features');

    }


}
