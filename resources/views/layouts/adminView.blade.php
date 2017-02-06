@extends('layouts.app')
@section('content')
<div class="sidebar_menu">
	<h1><a href="{{ route('admin-home') }}">Admin</a></h1>
	<ul>
		<li>
			<a href="{{ route('categories.index') }}">categories</a>
		</li>
		<li>
			<a href="{{ route('customers.index') }}">customers</a>
		</li>
		<li>
			<a href="{{ route('size.index') }}">size</a>
		</li>
		<li>
			<a href="{{ route('products.index') }}">products</a>
		</li>
		<li>
			<a href="{{ route('groups.index') }}">groups</a>
		</li>
		<li>
			<a href="{{ route('userstable.index') }}">userstable</a>
		</li>
		<li>
			<a href="{{ route('blog.index') }}">blog</a>
		</li>
		<li>
			<a href="{{ route('blog_category.index') }}">Category blog</a>
		</li>
	</ul>   
</div>
<div class="main-content">
@yield('mainContent')
</div>
@endsection