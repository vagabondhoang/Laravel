@extends('admin')
@section('title','productdetails')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../css/style.css">
@endsection
@section('content')
<div class="content">
	<h1 align="center">productdetails List</h1>
	<div class="row">
		<div class="col-sm-3">
			<button class="btn btn-success"><a href="http://localhost/demo/public/admin/productdetails/create" style="color: #fff">Add</a></button>
		</div>
		<div class="col-sm-9">
			{!! Form::open(['method'=>'get','url'=>'admin/productdetails','class'=>'navbar-form navbar-left','role'=>'search']) !!}
			<div class="input-group custom-search-form">
				<input type="text" name="search" class="form-control" placeholder="search">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default-sm">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</span>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<table  class="table table-striped">
				<thead>
					<tr align="center">
						<td>STT</td>
						<td>productsId</td>
						<td>colour</td>
						<td>initialPrice</td>
						<td>discount</td>
						<td>image_list</td>
						<td>quantity</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
				</thead>
				<tbody>
					<?php $stt = 0; ?>
					@foreach($productdetails as $item)
					<?php $stt = $stt +1; ?>
					<tr align="center">
						<td>{{$stt}}</td>
						<td>{{$item->productsId}}</td>
						<td>{{$item->colour}}</td>
						<td>{{$item->initialPrice}}</td>
						<td>{{$item->discount}}</td>
						<td>{{$item->image_list}}</td>
						<td>{{$item->quantity}}</td>
						<td>
							<i class="glyphicon glyphicon-pencil"></i>
							<a href="http://localhost/demo/public/admin/productdetails/edit/{{$item->id}}">edit</a>
						</td>
						<td>
							<i class="glyphicon glyphicon-trash"></i>
							<a onclick="return confirm('ban co chac la muon xoa khong?')" href="http://localhost/demo/public/admin/productdetails/destroy/{{$item->id}}">delete</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $productdetails->links() !!}
			</div>
		</div>
	</div>
</div>
@endsection
