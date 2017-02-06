@extends('layouts.adminView')
@section('mainContent')
<h1>Size Edit</h1>
{{ Form::open(array('route'=>array('size.update',$item->id),'method'=>'PUT')) }}
{{ csrf_field() }}
<label>Title</label><br><br>
<div class="form-group">
	<input class="form-control" type="text" name="title" value="{{$item->title}}" />
</div>
<button type="submit" class="btn btn-primary">Edit</button>
{{ Form::close() }}
@endsection