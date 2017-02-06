<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupsController extends Controller
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
        $groupsList = Group::where('name','like','%'.$search.'%')
        ->orderBy('id','desc')->paginate(3);
        return view('groups.table')->with('groups',$groupsList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $groups = new Group();
        $groups->create($request->all());
        return redirect()->route('groups.index');
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
     $data['item'] = Group::findOrFail($id);
     return view('groups.edit', $data);
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
        $groups = Group::find($id);
        $groups->update($request->all()); 
        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $groups = Group::find($id);
       $groups->delete($id);
       return redirect()->route('groups.index');
   }
   public function destroyMulti(Request $request)
    {
        //dd($request->all());
        $groups = Group::whereIn('id', $request->id);
        $groups->delete();
        return response()->json(['status' => 1], 200);
    }
}
