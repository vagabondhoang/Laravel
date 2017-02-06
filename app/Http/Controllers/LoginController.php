<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use App\User;
use Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.login');
    }

    public function login(Request $req)
    {
        $message = 'Login Failed';
        $user = User::where('name', $req->input('name'))->first();
        if ($user->password == $req->input('password')) {
            session(['name' => $req->input('name')]);
            return redirect('admin');
        }
        echo $message;
    }

    public function profile()
    {
        return view('profile',array('login'=>Auth::user()));
    }

}
