@extends('layouts.adminView')
@section('content')
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

<div class="container">
	<div class="row title_count">
		<div class="col-md-3 color-1">
			<span class="count_top"><i class="fa fa-user"></i> Total Users</span>
			<div class="count">{{ $totalUser }}</div>
			<span class="count_bottom"><i class="green">{{ $userActive }} </i> Active Users</span>
		</div>
		<div class="col-md-3 color-2" >
			<span class="count_top"><i class="fa fa-product-hunt" aria-hidden="true"></i> Total Quantity</span>
			<div class="count">{{ $sumProduct }}</div>
			<span class="count_bottom"><i class="green"></i> Available for sale</span>
		</div>
		<div class="col-md-3 color-3">
			<span class="count_top"><i class="fa fa-btc" aria-hidden="true"></i> Total Blog</span>
			<div class="count">{{ $totalBlog }}</div>
			<span class="count_bottom"><i class="green">{{ $enableBlog }} </i> Enable Blog</span>
		</div>
		<div class="col-md-3 color-4">
			<span class="count_top"><i class="fa fa-product-hunt" aria-hidden="true"></i> Sold Quantity</span>
			<div class="count">{{ $soldQuantity }}</div>
			<span class="count_bottom"><i class="green"></i> Up To Now</span>
		</div>
	</div>
</div>
@endsection