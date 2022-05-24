<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Home extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function user()
    {
        return view('user');
    }

    public function home ()
    {
        return view('home');
    }

}
