<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogCategory;

class BlogCategoryController extends Controller
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
        $blog_category = BlogCategory::where('title','like','%'.$search.'%')
        ->orderBy('id','desc')->paginate(3);
        return view('blog_category.table')->with('blog_category',$blog_category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $blog_category = BlogCategory::all();
       return view('blog_category.create',['blog_category'=>$blog_category]);
   }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog_category = new BlogCategory();
        $blog_category->create($request->all());
        return redirect()->route('blog_category.index'); 
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
        $data['item'] = BlogCategory::findOrFail($id);
        return view('blog_category.edit', $data);
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
        $blog_category = BlogCategory::find($id);
        $blog_category->update($request->all());
        return redirect()->route('blog_category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog_category = BlogCategory::find($id);
        $blog_category->delete($id);
        return redirect()->route('blog_category.index');
    }
    public function destroyMulti(Request $request)
    {
        //dd($request->all());
        $blog_category = BlogCategory::whereIn('id', $request->id);
        $blog_category->delete();
        return response()->json(['status' => 1], 200);
    }
}
