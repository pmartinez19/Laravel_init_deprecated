<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function products($id)
    {
        if (isset($id)) {
            return view('products', ['id' => $id]);
        } else {
            return view('products');
        }
    }

    public function home ()
    {
        return view('home');
    }

}
