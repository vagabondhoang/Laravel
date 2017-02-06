@extends('layouts.adminView')
@section('mainContent')
<h1>Category Edit</h1>
<form action="{{ route('categories.update', $item->id)}}" method="POST">
	{{ method_field('PUT') }}
	{{ csrf_field() }}
	<label>Title</label><br><br>
	<div class="form-group">
		<input class="form-control" type="text" name="title" value="{{$item->title}}" />
	</div>
	{!! Form::submit('Edit', ['class'=>'btn btn-primary']) !!}
</form>
@endsection
