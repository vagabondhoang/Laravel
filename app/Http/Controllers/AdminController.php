<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userstable;
use App\Productdetail;
use App\Blog;
use App\Profile;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalUser      = Userstable::where('active','>=','0')->count();
        $userActive     = Userstable::where('active','=','1')->count();
        $sumProduct     = Productdetail::all()->sum('quantity');
        $totalBlog      = Blog::where('id','>','0')->count();
        $enableBlog     = Blog::where('status','enable')->count();
        $soldQuantity   = Profile::all()->count('ordering_count');
        $data = array(
            'totalUser'     => $totalUser,
            'userActive'    => $userActive,
            'sumProduct'    => $sumProduct,
            'totalBlog'     => $totalBlog,
            'enableBlog'    => $enableBlog,
            'soldQuantity'  => $soldQuantity
            );

        return view('layouts.admin', $data);
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
    public function show()
    {
        return view('layouts.adminView');
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
}
