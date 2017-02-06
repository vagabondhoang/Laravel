@extends('admin')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../../css/style.css">
@endsection
@section('content')
<form action="{{route('profiles.store')}}" method="post" id="validate">
	<div class="form-group">
		{{ csrf_field() }}
		<label>User Email:</label>
		<select name="userId" class="form-control">
			@foreach($userstable as $item)
			<option value="{{ $item->id }}">{{ $item->email }}</option>
			@endforeach
		</select><br>
		Created_by:<input type="text" name="created_by" class="form-control" /><br>
		First_name:<input type="text" name="first_name" class="form-control" /><br>
		Last_name:<input type="text" name="last_name" class="form-control" ><br>
		Gender:<input type="text" name="gender" class="form-control" ><br>
		Phone:<input type="text" name="phone" class="form-control" /><br>
		Mobile:<input type="text" name="mobile" class="form-control" /><br>
		Address_line1:<input type="text" name="address_line1" class="form-control" /><br>
		Address_line2:<input type="text" name="address_line2" class="form-control" /><br>
		Ordering_count:<input type="number" name="ordering_count" class="form-control" ><br>
		Company:<input type="text" name="company" class="form-control" /><br>
		Updated_on:<input type="text" name="updated_on" class="form-control" /><br>
		<button type="submit" class="btn btn-warning">Add</button>
	</div>
</form>
@endsection