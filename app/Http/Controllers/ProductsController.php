<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Productdetail;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $value = session('username');
        // if ($value == '' || $value == null) {
        //     return redirect('form/login');
        // }
        
        $search = \Request::get('search');
        $products = Product::where('name','like','%'.$search.'%')
        ->orderBy('id','desc')
        ->paginate(10);
        
        return view('products.table')->with('products',$products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product();
        $products->create($request->all());
        //dd($products);

        $productdetails = new Productdetail();
        $productdetails->productsId = $products->id;
        $productdetails->create($request->all());
        
        return redirect()->route('products.index');    
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
        $id or die('Not found...');
        $data['products'] = Product::findOrFail($id);
        $data['productdetails'] = Productdetail::findOrFail($id);
        $data['categories'] = Category::all();
        return view('products.edit', $data);
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

        $products = Product::find($id);
        $products->update($request->all());

        $productdetails = Productdetail::find($id);
        $productdetails>update($request->all());
        return redirect()->route('products.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete($id);
        return redirect()->route('products.index');  
    }
    public function destroyMulti(Request $request)
    {
        //dd($request->all());
        $products = Product::whereIn('id', $request->id);
        $products->delete();
        //return response()->json(['status' => 1], 200);
    }
}

