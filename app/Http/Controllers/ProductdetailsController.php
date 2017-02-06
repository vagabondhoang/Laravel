<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Productdetail;
use App\Product;

class ProductdetailsController extends Controller
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
        $productdetailsList = Productdetail::where('initialPrice','like','%'.$search.'%')
        ->orWhere('colour','like','%'.$search.'%')
        ->orderBy('id','desc')->paginate(3);
        return view('productsdetails.table')->with('productdetails',
            $productdetailsList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        return view('productsdetails.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productdetails = new Productdetail();
        $productdetails->create($request->all());

        return redirect()->route('productdetails.index');  
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
       $data['item'] = Productdetail::findOrFail($id);
       $data['products'] = Product::all();
       return view('productsdetails.edit', $data);
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
        $productdetails = Productdetail::find($id);
        $productdetails->update($request->all());
        // $productdetails->productsId = $request->input('productsId');
        // $productdetails->colour = $request->input('colour');
        // $productdetails->initialPrice = $request->input('initialPrice');
        // $productdetails->discount = $request->input('discount');
        // $productdetails->image_list = $request->input('image_list');
        // $productdetails->quantity = $request->input('quantity');
        // $productdetails->save();
        return redirect()->route('productdetails.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $productdetails = Productdetail::find($id);
       $productdetails->delete($id);
       return redirect()->route('productdetails.index');
   }
}
