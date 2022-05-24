<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Products extends Controller
{
    public function products($id=0)
    {
        if ($id !=0) {
            Products::productDetail($id);
        } else {

            $list = \DB::table('products')->where('ID','<',30)->get();
            return view('products', array('products'=>$list));
        }
    }
    public function productDetail($id)
    {
        return view('productDetail', ['id' => $id]);
    }

}
