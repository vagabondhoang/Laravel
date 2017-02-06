@extends('layouts.adminView')
@section('mainContent')
<h1 align="center">Customers List</h1>
<div class="row">
	<div class="col-sm-9">
		<a href="{{route('customers.create')}}" class="create">Create New</a>
	</div>
	<div class="col-sm-3">
		<form action="{{ route('customers.index') }}" method="get" role="search" class="navbar-form navbar-left">
			<div class="input-group custom-search-form">
				<input type="text" name="search" class="form-control" placeholder="search" value="{{request('search')}}">
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
		<div class="table-responsive">
			<table  class="tblResult table table-striped">
				<thead>
					<tr>
						<td align="center">
							<input type="checkbox" onchange="selectAll();"
							id="select_all"/>
						</td>
						<td align="center">STT</td>
						<td>title</td>
						<td align="center">Action</td>
					</tr>
				</thead>
				<tbody>
					<?php $stt = 0; ?>
					@foreach($customers as $item)
					<?php $stt = $stt +1; ?>
					<tr align="center" id="{{$item->id}}">
						<td><input type="checkbox" class="checkbox" onchange="checkChoose();" value="{{$item->id}}" /></td>
						<td>{{$stt}}</td>
						<td align="left">{{$item->title}}</td>
						<td align="center">
							<div class="row" style="width: 30%">
								<div class="col-sm-6">
									<a href="{{ route('customers.edit',$item->id )}}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
								</div>
								<div class="col-sm-6">
									{!! Form::open(array('route'=>array('customers.destroy',$item->id),'method'=>'DELETE')) !!}
									<button type="submit" class="btn btn-success" onclick="return confirm('ban co chac la muon xoa khong?')"><i class="glyphicon glyphicon-trash"></i>Delete</button>
									{!! Form::close() !!}
								</div>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row">
			<div class="pull-left">
				<button  type="button" class="btn btn-primary" disabled data-url="{{ route('customers.destroy.multi') }}">
					Delete
				</button>
			</div>
		</div>
		<div class="pull-right">
			{!! $customers->links() !!}
		</div>
	</div>
</div>
@endsection


