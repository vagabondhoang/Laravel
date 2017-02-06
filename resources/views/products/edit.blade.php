@extends('layouts.adminView')
@section('mainContent')
<h1>Products Edit</h1>

{{ Form::open(array('route'=>array('products.update',$products->id),'method'=>'PUT')) }}
{{ csrf_field() }}
<label>Name</label><br><br>
<div class="form-group">
	<input class="form-control" type="text" name="name" value="{{$products->name}}" />
</div>
<label>Image_link</label>
<div class="form-group">
	<input class="form-control" type="text" name="image_link" value="{{$products->image_link}}" />
</div>
<label>description</label>
<div class="form-group">
	<input class="form-control" type="text" name="description" value="{{$products->description}}" />
</div>
<label>Categories Title</label>
<div class="form-group">
	<select name="categoriesId" class="form-control">
		@foreach($categories as $i)
		<option value="{{$i->id}}"
			@if($products->categoriesId == $i->id)
			selected="selected"
			@endif()
			>{{$i->title}}
		</option>
		@endforeach
	</select>
</div>



<!-- <label>ProductsID</label>
<div class="form-group">
	<input class="form-control" type="number" name="productsID" value="{{$products->id}}" />
</div> -->
<label>colour</label>
<div class="form-group">
	<input class="form-control" type="text" name="colour" value="{{$productdetails->colour}}" />
</div>
<label>initialPrice</label>
<div class="form-group">
	<input class="form-control" type="text" name="initialPrice" value="{{$productdetails->initialPrice}}" />
</div>
<label>discount</label>
<div class="form-group">
	<input class="form-control" type="text" name="discount" value="{{$productdetails->discount}}" />
</div>
<label>image_list</label>
<div class="form-group">
	<input class="form-control" type="text" name="image_list" value="{{$productdetails->image_list}}" />
</div>
<label>quantity</label>
<div class="form-group">
	<input class="form-control" type="text" name="quantity" value="{{$productdetails->quantity}}" />
</div>

<button type="submit" class="btn btn-primary">Edit</button>
{{ Form::close() }}
@endsection