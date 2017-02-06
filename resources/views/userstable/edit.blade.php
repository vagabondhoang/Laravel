@extends('layouts.adminView')
@section('mainContent')
<h1>Users Edit</h1>
{{ Form::open(array('route'=>array('userstable.update',$item->id),'method'=>'PUT')) }}
	{{ csrf_field() }}
	<label>Email</label><br><br>
	<div class="form-group">
		<input class="form-control" type="text" name="email" value="{{$item->email}}" />
	</div>
	<label>Password</label>
	<div class="form-group">
		<input class="form-control" type="text" name="password" value="{{$item->password}}" />
	</div>
	<label>Groups Name</label>
	<div class="form-group">
		<select name="groupsId" class="form-control">
			@foreach($groups as $i)
			<option value="{{$i->id}}"
				@if($item->groupsId == $i->id)
				selected = "selected"
				@endif()
				>
				{{$i->name}}
			</option>
			@endforeach
		</select>
	</div>
	<label>Created_on</label>
	<div class="form-group">
		<input class="form-control" type="text" name="created_on" value="{{$item->created_on}}" />
	</div>
	<label>Last_login</label>
	<div class="form-group">
		<input class="form-control" type="text" name="last_login" value="{{$item->last_login}}" />
	</div>
	<label>Username</label>
	<div class="form-group">
		<input class="form-control" type="text" name="username" value="{{$item->username}}" />
	</div>
	<label>Active</label>
	<div class="form-group">
		<input class="form-control" type="text" name="active" value="{{$item->active}}" />
	</div>
	<label>Forgotten_password_code</label>
	<div class="form-group">
		<input class="form-control" type="text" name="forgotten_password_code" value="{{$item->forgotten_password_code}}" />
	</div>
	<label>Remember_code</label>
	<div class="form-group">
		<input class="form-control" type="text" name="remember_code" value="{{$item->remember_code}}" />
	</div>

	<label>User Email</label><br><br>
	<div class="form-group">
		<select name="userId" class="form-control">
			@foreach($userstable as $i)
			<option value="{{ $i->id }}"
				@if($profiles->userId == $i->id) 
				selected="selected" 
				@endif
				>{{ $i->email }}
			</option>
			@endforeach
		</select>
	</div>
	<label>Created_by</label>
	<div class="form-group">
		<input class="form-control" type="text" name="created_by" value="{{$profiles->created_by}}" />
	</div>
	<label>First_name</label>
	<div class="form-group">
		<input class="form-control" type="text" name="first_name" value="{{$profiles->first_name}}" />
	</div>
	<label>Last_name</label>
	<div class="form-group">
		<input class="form-control" type="text" name="last_name" value="{{$profiles->last_name}}" />
	</div>
	<label>Gender</label>
	<div class="form-group">
		<input class="form-control" type="text" name="gender" value="{{$profiles->gender}}" />
	</div>
	<label>Phone</label>
	<div class="form-group">
		<input class="form-control" type="text" name="phone" value="{{$profiles->phone}}" />
	</div>
	<label>Mobile</label>
	<div class="form-group">
		<input class="form-control" type="text" name="mobile" value="{{$profiles->mobile}}" />
	</div>
	<label>Address_line1</label>
	<div class="form-group">
		<input class="form-control" type="text" name="address_line1" value="{{$profiles->address_line1}}" />
	</div>
	<label>Address_line2</label>
	<div class="form-group">
		<input class="form-control" type="text" name="address_line2" value="{{$profiles->address_line2}}" />
	</div>
	<label>Ordering_count</label>
	<div class="form-group">
		<input class="form-control" type="text" name="ordering_count" value="{{$profiles->ordering_count}}" />
	</div>
	<label>Company</label>
	<div class="form-group">
		<input class="form-control" type="text" name="company" value="{{$profiles->company}}" />
	</div>
	<label>Updated_on</label>
	<div class="form-group">
		<input class="form-control" type="text" name="updated_on" value="{{$profiles->updated_on}}" />
	</div>
	<button type="submit" class="btn btn-primary">Edit</button>
{{ Form::close() }}
@endsection