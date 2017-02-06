@extends('layouts.adminView')
@section('mainContent')
<h1 align="center">Blog List</h1>
<div class="row">
	<div class="col-sm-9">
		<a href="{{route('blog.create')}}" class="create">Create New</a>
	</div>
	<div class="col-sm-3">
		<form action="{{ route('blog.index') }}" method="get" role="search" class="navbar-form navbar-left">
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
			<table  class="table table-striped">
				<thead>
					<tr align="center">
						<td>
							<input type="checkbox" onchange="selectAll();"
							id="select_all"/>
						</td>
						<td>STT</td>
						<td>Created</td>
						<td>Updated</td>
						<td>Created_by</td>
						<td>Intro</td>
						<td>Title</td>
						<td>Slug</td>
						<td>Category Title</td>
						<td>Body</td>
						<td>Parsed</td>
						<td>Thumbnail</td>
						<td>Keywords</td>
						<td>Comments_enabled</td>
						<td>Status</td>
						<td align="center">Action</td>
					</tr>
				</thead>
				<tbody>
					<?php $stt = 0; ?>
					@foreach($blog as $item)
					<?php $stt = $stt +1; ?>
					<tr align="center" id="{{$item->id}}">
						<td><input type="checkbox" class="checkbox" onchange="checkChoose();" value="{{$item->id}}" /></td>
						<td>{{$stt}}</td>
						<td>{{date('M j,Y H:i:s', strtotime($item->created))}}</td>
						<td>{{date('M j,Y H:i:s', strtotime($item->updated))}}</td>
						<td>{{$item->created_by}}</td>
						<td>{{$item->intro}}</td>
						<td>{{$item->title}}</td>
						<td>{{$item->slug}}</td>
						<td>{{$item->blog_category->title}}</td>	
						<td>{{$item->body}}</td>
						<td>{{$item->parsed}}</td>
						<td>{{$item->thumbnail}}</td>
						<td>{{$item->keywords}}</td>
						<td>{{$item->comments_enabled}}</td>
						<td>{{$item->status}}</td>
						<td align="center">
							<div class="row">
								<div class="col-sm-6">
									<a href="{{ route('blog.edit',$item->id )}}" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
								</div>
								<div class="col-sm-6">
									{!! Form::open(array('route'=>array('blog.destroy',$item->id),'method'=>'DELETE')) !!}
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
				<button  type="button" class="btn btn-primary" disabled data-url="{{ route('blog.destroy.multi') }}">
					Delete
				</button>
			</div>
			<div class="pull-right">
				{!! $blog->links() !!}
			</div>
		</div>
	</div>
</div>
@endsection
