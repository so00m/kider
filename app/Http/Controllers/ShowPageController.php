<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowPageController extends Controller
{
    public function errorpage(){
        return view('404');
    }

    public function about(){
        return view('about');
    }


    public function appointment(){
        return view('appointment');
    }
    


    public function cta(){
        return view('call-to-action');
    }
    

    public function classes(){
        return view('classes');
    }
    

    public function contact(){
        return view('contact');
    }
    

    public function facility(){
        return view('facility');
    }
    

    public function home(){
        return view('home');
    }
    

    public function team(){
        return view('team');
    }
    

    public function testimonial(){
        return view('testimonial');
    }
    



}
