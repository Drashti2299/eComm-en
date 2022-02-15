<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        $data= Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
     function addTocart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
            
        
        else
        {
            return redirect('/login_view');
        }
    }

     static function carttime()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartlist()
    {
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
}
