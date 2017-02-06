<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Userstable;
use App\Group;
use App\Profile;

class UserstableController extends Controller
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
        $userstable = Userstable::where('username','like','%'.$search.'%')
                                ->orderBy('id','desc')
                                ->paginate(3);

        return view('userstable.table')->with('userstable',$userstable);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        return view('userstable.create',['groups'=>$groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $userstable = new Userstable();
       $userstable->create($request->all());

       $profiles = new Profile();
       $profiles->create($request->all());

       return redirect()->route('userstable.index');
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
        $data['item'] = Userstable::findOrFail($id);
        $data['profiles'] = Profile::findOrFail($id);
        $data['groups'] = Group::all();
        $data['userstable'] = Userstable::all();
        return view('userstable.edit', $data);
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
        $userstable = Userstable::find($id);
        $userstable->update($request->all());
       
        $profiles = Profile::find($id);
        $profiles->update($request->all());
       
        return redirect()->route('userstable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userstable = Userstable::find($id);
        $userstable->delete($id);
        return redirect()->route('userstable.index');
    }
    public function destroyMulti(Request $request)
    {
        //dd($request->all());
        $userstable = Userstable::whereIn('id', $request->id);
        $userstable->delete();
        return response()->json(['status' => 1], 200);
    }
}
