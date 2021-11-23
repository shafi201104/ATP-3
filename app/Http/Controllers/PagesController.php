<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('page.home');
    }

    public function product(){
        return view('page.product');
    }

    public function teams(){
        return view('page.our_team');
    }

    public function about(){
        return view('page.about_us');
    }

    public function contact(){
        return view('page.contact');
    }

    

    
}
