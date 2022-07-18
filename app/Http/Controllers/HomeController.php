<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function checkout(){
        $id = Auth::user()->id;
        $cartProducts = DB::table('users')->select('chart_products')->where('id',$id)->get();
        $cartItems = json_decode($cartProducts[0]->chart_products);
        dd($cartItems);
        return view('checkout', compact('cartProducts'));
    }
}
