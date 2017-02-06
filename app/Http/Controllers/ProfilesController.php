<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Userstable;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = session('username');
        if ($value == '' || $value == null) {
            return redirect('form/login');
        }
        
        $search = \Request::get('search');
        $profiles = Profile::where('first_name','like','%'.$search.'%')
        ->orderBy('id')->paginate(3);
        return view('profiles.table')->with('profiles',$profiles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userstable = Userstable::all();
        return view('profiles.create',['userstable'=>$userstable]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profiles = new Profile();
        $profiles->userId=$request->input('userId');
        $profiles->created_by=$request->input('created_by');
        $profiles->first_name=$request->input('first_name');
        $profiles->last_name=$request->input('last_name');
        $profiles->gender=$request->input('gender');
        $profiles->phone=$request->input('phone');
        $profiles->mobile=$request->input('mobile');
        $profiles->address_line1=$request->input('address_line1');
        $profiles->address_line2=$request->input('address_line2');
        $profiles->ordering_count=$request->input('ordering_count');
        $profiles->company=$request->input('company');
        $profiles->updated_on=$request->input('updated_on');
        $profiles->save();

         return redirect()->route('profiles.index');
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
        $data['item'] = Profile::findOrFail($id);
        $data['userstable'] = Userstable::all();
        return view('profiles.edit', $data);
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
        $profiles = Profile::find($id);
        $profiles->userId=$request->input('userId');
        $profiles->created_by=$request->input('created_by');
        $profiles->first_name=$request->input('first_name');
        $profiles->last_name=$request->input('last_name');
        $profiles->gender=$request->input('gender');
        $profiles->phone=$request->input('phone');
        $profiles->mobile=$request->input('mobile');
        $profiles->address_line1=$request->input('address_line1');
        $profiles->address_line2=$request->input('address_line2');
        $profiles->ordering_count=$request->input('ordering_count');
        $profiles->company=$request->input('company');
        $profiles->updated_on=$request->input('updated_on');
        $profiles->save();
        return redirect()->route('profiles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profiles = Profile::find($id);
        $profiles->delete($id);
        return redirect()->route('profiles.index');
    }
}
