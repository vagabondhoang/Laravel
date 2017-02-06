@extends('admin')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../../css/style.css">
@endsection
@section('content')
<form action="http://localhost/demo/public/admin/productdetails/save" method="post" id="validate">
	<div class="form-group">
		{{ csrf_field() }}
		<label>Products Name:</label>
		<select name="productsId" class="form-control">
			@foreach($products as $item)
				<option value="{{$item->id}}">{{$item->name}}</option>
			@endforeach
		</select><br>
		Colour:<input type="text" name="colour" class="form-control" /><br>
		initialPrice:<input type="number" name="initialPrice" class="form-control" /><br>
		Discount:<input type="number" name="discount" class="form-control" /><br>
		ImageList:<input type="text" name="image_list" class="form-control" /><br>
		Quantity:<input type="number" name="quantity" class="form-control" /><br>
		<button type="submit" class="btn btn-default">Add</button>
	</div>
</form>
@endsection