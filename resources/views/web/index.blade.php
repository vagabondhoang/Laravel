@include('web.header');
<!--start-content-->
<!--start-banner-->
<div class="banner">
	<div class="container">
		<div class="banner-grids">
			<div class="col-md-6 jocket">
				<div class="jock-img">
					<img src="images/sht.jpg" alt="">
				</div>
				<div class="jock-text">
					<h3 class="b-tittle">Men's Jacket</h3>
					<a class="collection" href="single.html">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 shoe">
				<div class="shoe-img">
					<img src="images/shoe.jpg" class="img-responsive" alt="">
				</div>
				<div class="shoe-text">
					<h3 class="b-tittle">Men's Shoes</h3>
					<a class="collection" href="single.html">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
				</div>
				<div class="clearfix"> </div>
				<div class="bottom-bags">
					<div class="col-md-6 pack">
						<div class="bag-text">
							<h3 class="b-tittle">Bags</h3>
							<a class="collection" href="single.html">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
						</div>
						<div class="bag-img">
							<img src="images/bag.jpg" class="img-responsive" alt="">
						</div>
						<div class="clearfix"> </div>
						
					</div>	
					<div class="col-md-6 glass">
						<div class="glass-text">
							<h3 class="b-tittle">Glasses</h3>
							<a class="collection" href="single.html">View collection <i class="glyphicon glyphicon-arrow-right"></i></a>
						</div>
						<div class="glass-img">
							<img src="images/glass.jpg" class="img-responsive" alt="">
						</div>
						<div class="clearfix"> </div>
						
					</div>	
					<div class="clearfix"> </div>						   
				</div>
			</div>						   
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--/start-fashion-->
<div class="fashion-section">
	<div class="container"> 
		<h3 class="tittle">Fashions</h3>

		<div class="fashion-info">
			@foreach($product as $item)
			@if($item->slug == "FASHIONS")
			<div class="col-md-4 fashion-grids">
				<figure class="effect-bubba">
					<img src="images/{{$item->image_link}}" alt=""/>
					<figcaption>
						<h4>Nuevo Shop</h4>
						<p class="cart"><a href="{{route('chitietsanpham.index', $item->id)}}">Shop</a></p>				
					</figcaption>			
				</figure>		
			</div>
			@endif
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//fashion-->
<!--/start-latest-->
<div class="collection-section">
	<div class="container"> 
		<h3 class="tittle fea">FEATURED COLLECTIONS</h3>

		<div class="fashion-info">
			@foreach($product as $item)
			@if($item->slug == "featuredCollections")
			<div class="col-md-4 fashion-grids">
				<figure class="effect-bubba">
					<img src="images/{{$item->image_link}}" alt=""/>
					<figcaption>
						<h4>Nuevo Shop</h4>
						<p class="cart"><a href="{{route('chitietsanpham.index',$item->id)}}">Shop</a></p>				
					</figcaption>			
				</figure>		
			</div>
			@endif
			@endforeach	
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//latest-->
<div class="container">
	<div class="recommand-section">
		<div class="recommand-section-head text-center">
			<h3 class="tittle fea">Recommended Products</h3>
		</div>
		<div class="recommand-section-grids">

			<div class="standards">
				<h5>Tags<i class="glyphicon glyphicon-tag"></i></h5>
				<ul class="selectors_wrapper">
					<li class="selector active" data-selector="1">Popular</li>
					<li class="selector" data-selector="2">Sales</li>
					<li class="selector" data-selector="3">Seller</li>
					<li class="selector" data-selector="4">Rate</li>
				</ul>
				
				<div class="standard_content">
					<div class="standard active" data-selector="1">
						@foreach($product as $item)
						@if($item->slug == "recommendedProducts")
						<div class="tag-grid">
							<div class="tag-wrapper">		
								<a href="{{route('chitietsanpham.index',$item->id)}}"><img src="images/{{$item->image_link}}" class="img-responsive" alt="" /></a>
								<div class="r-title">
									<h3>Sunny Dress</h3>
									<h4>$30</h4>
								</div>
							</div>
							<div class="atc"><a href="{{route('chitietsanpham.index',$item->id)}}">Shop</a></div>
						</div>
						@endif
						@endforeach
						<div class="clearfix"></div>
					</div>
					<div class="standard" data-selector="2">
						@foreach($product as $item)
						@if($item->slug == "recommendedProducts")
						<div class="tag-grid">
							<div class="tag-wrapper">		
								<a href="single.html"><img src="images/{{$item->image_link}}" class="img-responsive" alt="" /></a>
								<div class="atc"><a href="{{route('chitietsanpham.index',$item->id)}}">Shop</a></div>
								<div class="r-title">
									<h3>Sunny Dress</h3>
									<h4>$30</h4>
								</div>
							</div>
						</div>
						@endif
						@endforeach	
						<div class="clearfix"></div>
					</div>
					<div class="standard" data-selector="3">
						@foreach($product as $item)
						@if($item->slug == "recommendedProducts")
						<div class="tag-grid">
							<div class="tag-wrapper">		
								<a href="{{route('chitietsanpham.index',$item->id)}}"><img src="{{$item->image_link}}" class="img-responsive" alt="" /></a>
								<div class="atc"><a href="{{route('chitietsanpham.index',$item->id)}}">Shop</a></div>
								<div class="r-title">
									<h3>Sunny Dress</h3>
									<h4>$30</h4>
								</div>
							</div>
						</div>
						@endif
						@endforeach
						<div class="clearfix"></div>
					</div>
					<div class="standard" data-selector="4">
						@foreach($product as $item)
						@if($item->slug == "recommendedProducts")
						<div class="tag-grid">
							<div class="tag-wrapper">		
								<a href="{{route('chitietsanpham.index',$item->id)}}"><img src="{{$item->image_link}}" class="img-responsive" alt="" /></a>
								<div class="atc"><a href="{{route('chitietsanpham.index',$item->id)}}">Shop</a></div>
								<div class="r-title">
									<h3>Sunny Dress</h3>
									<h4>$30</h4>
								</div>
							</div>
						</div>
						@endif
						@endforeach
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>

<div class="mid-content"> 
	<div class="container"> 
		<div class="middle">
			<div class="mid-top"> 
				<h3>Discover a huge assortment of</h3>
				<p>women`s handbags at the lowest prices</p>
			</div>
		</div>
	</div>
</div>

<!--start-footer-->
@include('web.footer');