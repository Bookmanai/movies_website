<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('usersfront.index');
    }
}
