@extends('layouts.adminView')
@section('title','users')
@section('mainContent')
<h1>Blog_Category Edit</h1>
{{ Form::open(array('route'=>array('blog_category.update',$item->id),'method'=>'PUT')) }}
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<label>Slug</label><br><br>
	<div class="form-group">
		<input class="form-control" type="text" name="created" value="{{$item->slug}}" />
	</div>
	<label>Title</label>
	<div class="form-group">
		<input class="form-control" type="text" name="updated" value="{{$item->title}}" />
	</div>
	<button type="submit" class="btn btn-primary">Edit</button>
{{ Form::close() }}
@endsection