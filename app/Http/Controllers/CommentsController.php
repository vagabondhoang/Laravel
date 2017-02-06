<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comments;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commentsList = comments::all();
        return view('comments.table')->with('comments',$commentsList);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $is_active      = $request->input('is_active');
        $usersId        = $request->input('usersId');
        $user_name      = $request->input('user_name');
        $user_email     = $request->input('user_email');
        $comment        = $request->input('comment');
        $created_on     = $request->input('created_on');
        $blogId         = $request->input('blogId');
        if (($is_active != null && $is_active != '')&&($usersId != null && $usersId != '')&&($user_name != null && $user_name != '')&&($user_email != null && $user_email != '')&&($comment != null && $comment != '')&&($created_on != null && $created_on != '')&&($blogId != null && $blogId != '')) {
            $comments = new comments();
            $comments->is_active = $is_active;
            $comments->usersId = $usersId;
            $comments->user_name = $user_name;
            $comments->user_email = $user_email;
            $comments->comment = $comment;
            $comments->created_on = $created_on;
            $comments->blogId = $blogId;
            $comments->save();

            return redirect('admin/comments');
        } else {
            return redirect('admin/comments/create');
        }

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
