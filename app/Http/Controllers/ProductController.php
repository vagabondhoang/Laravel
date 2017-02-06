<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Product;
use App\Category;
use App\Image;
use Cart;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu   = Menu::all();
        $image  = Image::all();
        $product  = Product::select('id', 'name','image_link','price','brand','slug')->get();
        $categories = Category::select('id','title')->get();

        return view('web.product',['menu'=>$menu,'product'=>$product,'categories'=>$categories,'imageList'=>$image]);
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

    public function postCheckout(Request  $request) {
        // $subtotal   = Cart::subtotal();
        dd($request);
        Stripe::setApiKey("sk_test_9DnCfzOdw8zoAwtC9awYK4Z4");
        Charge::create(array(
            "amount" => $subtotal,
            "currency" => "usd",
              "source" => $request->input('stripeToken'), // obtained with Stripe.js
              "description" => "Charge for emily.martinez@example.com"
              ));
        return  redirect()->route('checkout')->with('success','Successfully purchased');        
    }
}
