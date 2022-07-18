<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.home', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addProductToCart(Request $request, Product $product)
    {
        $id = Auth::user()->id;
        $cartItems = json_decode(DB::table('users')->select('chart_products')->where('id',$id)->get(),true);
        $productToAdd = array(
            'product_name' => $product->product_name,
            'price' => $product->price,
            'product_description' => $product->product_description,
            'category_name' => $product->category->category_name,
            'quantity' => 1,
        );
        $cartItems = $cartItems[0];
        if(!$cartItems){
            User::where('id',$id)->update([
                'chart_products' => json_encode([
                    $productToAdd,
                ])
            ]);    
        } else {
            $productToAdd = json_encode($productToAdd);
            dd($productToAdd);
            array_push($cartItems['chart_products'],$productToAdd);
            dd($cartItems);
        }
        // User::where('id',$id)->update([
        //     'chart_products' => json_encode([
        //         $cartItems,
        //     ])
        // ]);
        return redirect(route('home'));
    }
}
