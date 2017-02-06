@extends('admin')
@section('title','users')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../../../css/style.css">
@endsection
@section('content')
<h1>Profile Edit</h1>
{{ Form::open(array('route'=>array('profiles.update',$item->id),'method'=>'PUT')) }}
	{{ csrf_field() }}
	<label>User Email</label><br><br>
	<div class="form-group">
		<select name="userId" class="form-control">
			@foreach($userstable as $i)
			<option value="{{ $i->id }}"
				@if($item->userId == $i->id) 
				selected="selected" 
				@endif
				>{{ $i->email }}
			</option>
			@endforeach
		</select>
		
	</div>
	<label>Created_by</label>
	<div class="form-group">
		<input class="form-control" type="text" name="created_by" value="{{$item->created_by}}" />
	</div>
	<label>First_name</label>
	<div class="form-group">
		<input class="form-control" type="text" name="first_name" value="{{$item->first_name}}" />
	</div>
	<label>Last_name</label>
	<div class="form-group">
		<input class="form-control" type="text" name="last_name" value="{{$item->last_name}}" />
	</div>
	<label>Gender</label>
	<div class="form-group">
		<input class="form-control" type="text" name="gender" value="{{$item->gender}}" />
	</div>
	<label>Phone</label>
	<div class="form-group">
		<input class="form-control" type="text" name="phone" value="{{$item->phone}}" />
	</div>
	<label>Mobile</label>
	<div class="form-group">
		<input class="form-control" type="text" name="mobile" value="{{$item->mobile}}" />
	</div>
	<label>Address_line1</label>
	<div class="form-group">
		<input class="form-control" type="text" name="address_line1" value="{{$item->address_line1}}" />
	</div>
	<label>Address_line2</label>
	<div class="form-group">
		<input class="form-control" type="text" name="address_line2" value="{{$item->address_line2}}" />
	</div>
	<label>Ordering_count</label>
	<div class="form-group">
		<input class="form-control" type="text" name="ordering_count" value="{{$item->ordering_count}}" />
	</div>
	<label>Company</label>
	<div class="form-group">
		<input class="form-control" type="text" name="company" value="{{$item->company}}" />
	</div>
	<label>Updated_on</label>
	<div class="form-group">
		<input class="form-control" type="text" name="updated_on" value="{{$item->updated_on}}" />
	</div>
	<button type="submit" class="btn btn-primary">Edit</button>
{{ Form::close() }}
@endsection