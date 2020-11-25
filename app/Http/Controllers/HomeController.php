<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function about(){
        return view('content.about');
    }

    public function news(){
        return view('news.news');
    }

    public function case(){
        return view('case.case');
    }
}
