<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Products extends Controller
{
    public function products($id=-1)
    {
        if ($id !=-1) {
            Products::productDetail($id);
        } else {

            $list = \DB::table('products')->where('ID','<',30)->get();
            return view('products', array('products'=>$list));
        }
    }
    public function productDetail($id)
    {
        $product = \DB::table('products')->where('ID',$id)->first();
        return view('productDetail', array('product'=>$product));
    }
    public function buy($price =1)
    
    {
        
        $subtract_from_balance = \DB::table('users')->where('ID',Auth::id())->decrement('balance',$price);
        return "<script>
         setTimeout(function(){
            alert('Product will drop in 5 seconds');
            window.location.href='/products';},5000);
            </script>";

    }

}
