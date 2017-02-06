<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Size;

class SizeController extends Controller
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
        $sizeList = Size::where('title','like','%'.$search.'%')->orderBy('id')->paginate(3);
        return view('size.table')->with('size',$sizeList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('size.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $size = new Size();
        $size->create($request->all());
        return redirect()->route('size.index');
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
        $data['item'] = Size::findOrFail($id);
        return view('size.edit', $data);
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
     $size = Size::find($id);
     $size->update($request->all());
     return redirect()->route('size.index');  
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $size = Size::find($id);
       $size->delete($id);
       return redirect()->route('size.index');
   }
   public function destroyMulti(Request $request)
    {
        //dd($request->all());
        $size = Size::whereIn('id', $request->id);
        $size->delete();
        return response()->json(['status' => 1], 200);
    }
}
