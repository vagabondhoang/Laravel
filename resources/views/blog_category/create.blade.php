@extends('layouts.adminView')
@section('mainContent')
<form action="{{route('blog_category.store')}}" method="post" id="validate">
	<div class="form-group">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Slug:<input type="text" name="slug" class="form-control" ><br>
		Title:<input type="text" name="title" class="form-control" ><br>
		<button type="submit" class="btn btn-warning">Add</button>
	</div>
</form>
@endsection