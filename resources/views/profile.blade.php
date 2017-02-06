@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @foreach($user as $user)
            <img src="{{ asset('uploads/avatars/'.$user->avatar) }}" style="width: 150px;height: 150px;float: left;border-radius: 50%;margin-right: 25px">
            <h2>{{ $user->name}}'s Profile</h2>
            <br><br><br><br><br><br>
            <div class="form-group">
             <label>Name</label>
             <input type="text" value="{{ $user->name }}" class="form-control" name="name"> 
         </div>
         <div class="form-group">
             <label>Email</label>
             <input type="email" value="{{ $user->email }}" class="form-control" name="email"> 
         </div>
         <div class="form-group">
             <label>About</label>
             <textarea class="form-control" cols="50" rows="10"  name="about">
             {{ $user->about}}
             </textarea>
         </div>
         <div class="form-group">
             <label>Password</label>
             <input type="password"  class="form-control" value="{{ $user->password}}" name="password"> 
         </div>

         <a href="{{ route('profile.edit',$user->id)}}" class="btn btn-success"> UPDATE PROFILE</a>
        @endforeach
     </div>
 </div>
</div>
@endsection
