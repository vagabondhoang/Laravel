@extends('layouts.adminView')
@section('title','groups')
@section('mainContent')
<h1>Productdetails Edit</h1>
{{ Form::open(array('route'=>array('groups.update',$item->id),'method'=>'PUT')) }}
{{ csrf_field() }}
<label>name</label><br><br>
<div class="form-group">
	<input class="form-control" type="text" name="name" value="{{$item->name}}" />
</div>
<label>description</label>
<div class="form-group">
	<input class="form-control" type="text" name="description" value="{{$item->description}}" />
</div>
<button type="submit" class="btn btn-primary">Edit</button>
{{ Form::close() }}
@endsection