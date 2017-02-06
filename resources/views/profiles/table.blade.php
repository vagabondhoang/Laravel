@extends('admin')
@section('title','profile')
@section('stylesheet')
<link rel="stylesheet" type="text/css" href="../css/style.css">
@endsection
@section('content')
<div class="content">
	<h1 align="center">Profile List</h1>
	<div class="row">
		<div class="col-sm-3">
			<button class="btn btn-success">
				<a href="{{route('profiles.create')}}" style="color:#fff">Add</a>
			</button>
		</div>
		<div class="col-sm-9">
			<form action="{{ route('profiles.index') }}" method="get" role="search" class="navbar-form navbar-left">
			<div class="input-group custom-search-form">
				<input type="text" name="search" class="form-control" placeholder="search">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default-sm">
						<i class="glyphicon glyphicon-search"></i>
					</button>
				</span>
			</div>
			</form>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<table  class="table table-striped">
				<thead>
					<tr align="center">
						<td>STT</td>
						<td>UserId</td>
						<td>Created_by</td>
						<td>First_name</td>
						<td>Last_name</td>
						<td>Gender</td>
						<td>Phone</td>
						<td>Mobile</td>
						<td>Address_line1</td>
						<td>Address_line2</td>
						<td>Ordering_count</td>
						<td>Company</td>
						<td>Edit</td>
						<td>Delete</td>
					</tr>
				</thead>
				<tbody>
					<?php $stt = 0; ?>
					@foreach($profiles as $item)
					<?php $stt = $stt +1; ?>
					<tr align="center">
						<td>{{$stt}}</td>
						<td>{{$item->userstable->email}}</td>
						<td>{{$item->created_by}}</td>
						<td>{{$item->first_name}}</td>
						<td>{{$item->last_name}}</td>
						<td>{{$item->gender}}</td>
						<td>{{$item->phone}}</td>
						<td>{{$item->mobile}}</td>
						<td>{{$item->address_line1}}</td>
						<td>{{$item->address_line2}}</td>
						<td>{{$item->ordering_count}}</td>
						<td>{{$item->company}}</td>
						<td>
							<i class="glyphicon glyphicon-pencil"></i>
							<a href="{{route('profiles.edit',$item->id)}}">edit</a>
						</td>
						<td>
							<i class="glyphicon glyphicon-trash"></i>
							{!! Form::open(array('route'=>array('profiles.destroy',$item->id),'method'=>'DELETE')) !!}
							<button onclick="return confirm('ban co chac la muon xoa khong?')" type="submit" class="btn btn-success">delete</button>
							{!! Form::close() !!}
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
			{!! $profiles->links() !!}
			</div>
		</div>
	</div>
</div>
@endsection
