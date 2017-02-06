@extends('layouts.adminView')
@section('mainContent')
<h1>Blog Edit</h1>
{{ Form::open(array('route'=>array('blog.update',$item->id),'method'=>'PUT')) }}
<input type="hidden" name="_token" value="{{csrf_token()}}">
<label>Created</label><br><br>
<div class="form-group">
	<input class="form-control" type="text" name="created" value="{{$item->created}}" />
</div>
<label>Updated</label>
<div class="form-group">
	<input class="form-control" type="text" name="updated" value="{{$item->updated}}" />
</div>
<label>Created_by</label>
<div class="form-group">
	<input class="form-control" type="text" name="created_by" value="{{$item->created_by}}" />
</div>
<label>Intro</label>
<div class="form-group">
	<input class="form-control" type="text" name="intro" value="{{$item->intro}}" />
</div>
<label>Title</label>
<div class="form-group">
	<input class="form-control" type="text" name="title" value="{{$item->title}}" />
</div>
<label>Slug</label>
<div class="form-group">
	<input class="form-control" type="text" name="slug" value="{{$item->slug}}" />
</div>
<label>Category Title</label>
<div class="form-group">
	<select name="category_id" class="form-control">
		@foreach($blog_category as $i)
		<option value="{{$i->id}}" 
			@if($item->category_id == $i->id)
			selected="selected"
			@endif
			>{{$i->title}}</option>
			@endforeach
		</select>
	</div>
	<label>Body</label>
	<div class="form-group">
		<input class="form-control" type="text" name="body" value="{{$item->body}}" />
	</div>
	<label>Parsed</label>
	<div class="form-group">
		<input class="form-control" type="text" name="parsed" value="{{$item->parsed}}" />
	</div>
	<label>Thumbnail</label>
	<div class="form-group">
		<input class="form-control" type="text" name="thumbnail" value="{{$item->thumbnail}}" />
	</div>
	<label>Keywords</label>
	<div class="form-group">
		<input class="form-control" type="text" name="keywords" value="{{$item->keywords}}" />
	</div>
	<label>Comments_enabled</label>
	<div class="form-group">
		<input class="form-control" type="text" name="comments_enabled" value="{{$item->comments_enabled}}" />
	</div>
	<label>Status</label>
	<div class="form-group">
		<input class="form-control" type="text" name="status" value="{{$item->status}}" />
	</div>
	<button type="submit" class="btn btn-primary">Edit</button>
{{ Form::close() }}
@endsection