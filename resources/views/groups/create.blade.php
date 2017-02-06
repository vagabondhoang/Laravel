@extends('layouts.adminView')
@section('mainContent')
<form action="{{route('groups.store')}}" method="post" id="validate">
	<div class="form-group">
		{{ csrf_field() }}
		<label>Name:</label><br>
		<input type="text" name="name" class="form-control"  /><br>
		<label>Description:</label><br>
		<input type="text" name="description" class="form-control" /><br><br>
		<input type="submit" name="btnSubmit" value="Them moi" />
	</div>
</form>
@endsection