@extends('layouts.adminView')
@section('mainContent')
<form action="{{route('size.store')}}" method="post" id="validate">
	<div class="form-group">
		{{ csrf_field() }}
		<label>Title:</label><br>
		<input type="text" name="title" class="form-control" required="required" />
		<button type="submit" class="btn btn-default">Add</button>
	</div>
</form>
@endsection