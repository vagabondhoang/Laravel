@extends('layouts.adminView')
@section('mainContent')
<form action="{{route('blog.store')}}" method="post" id="validate">
	<div class="form-group">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Created:<input type="text" name="created" class="form-control" ><br>
		Updated:<input type="text" name="updated" class="form-control" ><br>
		Created_by:<input type="text" name="created_by" class="form-control" ><br>
		Intro:<input type="text" name="intro" class="form-control" ><br>
		Title:<input type="text" name="title" class="form-control" ><br>
		Slug:<input type="text" name="slug" class="form-control" ><br>
		<label>Category Title:</label>
		<select name="category_id" class="form-control">
			@foreach($blog_category as $item)
			<option value="{{ $item->id }}">{{ $item->title }}</option>
			@endforeach
		</select><br>
		Body:<input type="text" name="body" class="form-control" ><br>
		Parsed:<input type="text" name="parsed" class="form-control" ><br>
		Thumbnail:<input type="text" name="thumbnail" class="form-control" ><br>
		Keywords:<input type="text" name="keywords" class="form-control" ><br>
		Comments_enabled:<input type="text" name="comments_enabled" class="form-control" ><br>
		Status:<input type="text" name="status" class="form-control" ><br>
		<button type="submit" class="btn btn-warning">Add</button>
	</div>
</form>
@endsection