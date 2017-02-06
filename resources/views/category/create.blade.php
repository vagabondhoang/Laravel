@extends('layouts.adminView')
@section('mainContent')
<br><br>
<form action="{{route('categories.store')}}" method="post" id="validate">
	<div class="form-group">
		{{ csrf_field() }}
		<input type="text" name="title" class="form-control"  /><br><br>
		<button type="submit" class="btn btn-default">Add</button>
	</div>
</form>
@if(count($errors))
<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif
@endsection