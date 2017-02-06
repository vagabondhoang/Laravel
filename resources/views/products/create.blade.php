@extends('layouts.adminView')
@section('mainContent')
<form action="{{route('products.store')}}" method="post" id="validate">
	<div class="form-group">
		{!! csrf_field() !!}
		<label>Name:</label><input type="text" name="name" class="form-control"  /><br>
		<label>Image_link:</label><input type="text" name="image_link" class="form-control" /><br>
		<label>Description:</label><textarea name="description" ></textarea><br>
		<label>Categories Title:</label>
		<select name="categoriesId" class="form-control">
			@foreach($categories as $item)
			<option value="{{$item->id}}">{{$item->title}}</option>
			@endforeach
		</select>
		<label>Colour:</label>
		<input type="text" name="colour" class="form-control" /><br>
		<label>initialPrice:</label>
		<input type="number" name="initialPrice" class="form-control" /><br>
		<label>Discount:</label>
		<input type="number" name="discount" class="form-control" /><br>
		<label>ImageList:</label>
		<input type="text" name="image_list" class="form-control" /><br>
		<label>Quantity:</label>
		<input type="number" name="quantity" class="form-control" /><br>
		<button type="submit" class="btn btn-default">Add</button>
	</div>
</form>
@endsection
