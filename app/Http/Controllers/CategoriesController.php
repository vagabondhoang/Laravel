<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests\StoreDemo;
class CategoriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $search = \Request::get('search');
        $categoriesList = Category::where('title','like','%'.$search.'%')->orderBy('id','desc')->paginate(10);
        return view('category.table')->with('categories',$categoriesList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(StoreDemo $request)
    {
        $categories = new Category();
        $categories->create($request->all());
        //dd($categories);
        return redirect()->route('categories.index');
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
        $data['item'] = Category::findOrFail($id);
        return view('category.edit', $data);
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
        $this->validate($request, array(
            'title'=>'required|max:255'
            ));

        $categories = Category::find($id);
        $categories->update($request->all());
        return redirect()->route('categories.index');   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categories = Category::find($id);
        $categories->delete();
        
        return redirect()->route('categories.index');
    }

    public function destroyMulti(Request $request)
    {
        // dd($request->all());
        $categories = Category::whereIn('id', $request->id);
        $categories->delete();
        return response()->json(['status' => 1], 200);
    }
}
