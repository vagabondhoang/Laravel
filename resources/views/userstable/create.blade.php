@extends('layouts.adminView')
@section('mainContent')
<form action="{{route('userstable.store')}}" method="post" id="validate">
	<div class="form-group">
		{{ csrf_field() }}
		Email:<input type="email" name="email" class="form-control"  /><br>
		Password:<input type="password" name="password" class="form-control" /><br>
		<label>Groups Name:</label>
		<select name="groupsId" class="form-control">
			@foreach($groups as $item)
			<option value="{{ $item->id }}">{{ $item->name }}</option>
			@endforeach
		</select><br>
		Created_on:<input type="text" name="created_on" class="form-control" ><br>
		Last_login:<input type="text" name="last_login" class="form-control" ><br>
		Username:<input type="text" name="username" class="form-control" /><br>
		Active:<input type="number" name="active" class="form-control" /><br>
		Forgotten_password_code:<input type="text" name="forgotten_password_code" class="form-control" ><br>
		Remember_code:<input type="text" name="remember_code" class="form-control" /><br>
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