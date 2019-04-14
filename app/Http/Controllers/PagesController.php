<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "We Care";
        return view ('pages.home')->with('title' , $title);
    }
    public function about(){
        $title = "We Care";
        return view ('pages.about')->with('title' , $title);
    }
    public function contact(){
        $title = "We Care";
        return view ('pages.contact')->with('title' , $title);
    }
}
