<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Products extends Controller
{
    public function products($id=0)
    {
        if ($id !=0) {
            Products::productDetail($id);
        } else {
            return view('products');
        }
    }
    public function productDetail($id)
    {
        return view('productDetail', ['id' => $id]);
    }
}
