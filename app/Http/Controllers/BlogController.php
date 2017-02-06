<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\BlogCategory;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       
        // $value = session('username');
        // if ($value == '' || $value == null) {
        //     return redirect('form/login');
        // }
        
        $search = \Request::get('search');
        $blog = Blog::where('title','like','%'.$search.'%')
        ->orderBy('id','desc')->paginate(3);
        return view('blog.table')->with('blog',$blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog_category = BlogCategory::all();
        return view('blog.create',['blog_category'=>$blog_category]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $blog = new Blog();
        $blog->create($request->all());
        return redirect()->route('blog.index'); 
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
        $data['item'] = Blog::findOrFail($id);
        $data['blog_category'] = BlogCategory::all();
        return view('blog.edit', $data);
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
        $blog = Blog::find($id);
        $blog->update($request->all());
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete($id);
        return redirect()->route('blog.index');
    }
    public function destroyMulti(Request $request)
    {
        //dd($request->all());
        $blog = Blog::whereIn('id', $request->id);
        $blog->delete();
        return response()->json(['status' => 1], 200);
    }
}
