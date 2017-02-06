@extends('admin')
@section('title','users')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../../../css/style.css">
@endsection
@section('content')
<h1>Productdetails Edit</h1>
<form action="http://localhost/demo/public/admin/productdetails/edit/{{$item->id}}" method="post">
	{{ csrf_field() }}
	<label>products Name</label><br><br>
	<div class="form-group">
		<select name="productsId" class="form-control">
			@foreach($products as $i)
			<option value="{{$i->id}}"
				@if($item->productsId == $i->id)
				selected="selected"
				@endif
				>{{$i->name}}
			</option>
			@endforeach
		</select>
	</div>
	<label>colour</label>
	<div class="form-group">
		<input class="form-control" type="text" name="colour" value="{{$item->colour}}" />
	</div>
	<label>initialPrice</label>
	<div class="form-group">
		<input class="form-control" type="text" name="initialPrice" value="{{$item->initialPrice}}" />
	</div>
	<label>discount</label>
	<div class="form-group">
		<input class="form-control" type="text" name="discount" value="{{$item->discount}}" />
	</div>
	<label>image_list</label>
	<div class="form-group">
		<input class="form-control" type="text" name="image_list" value="{{$item->image_list}}" />
	</div>
	<label>quantity</label>
	<div class="form-group">
		<input class="form-control" type="text" name="quantity" value="{{$item->quantity}}" />
	</div>
	<button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection