<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index()
    {
        return view('layouts.main');
    }

    public function pricing()
    {
        return view('layouts.pricing');
    }

    public function faq()
    {
        return view('layouts.faq');
    }
}
