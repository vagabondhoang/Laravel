@include('web.header')
<!--start-content-->
<!-- products -->
<div class="products">
	<div class="container">
		<div class="products-grids">
			<div class="col-md-8 products-single">
				@foreach($product as $item)
				@foreach($product as $i)
				@if($i->parent_id == $item->id)
				<div class="col-md-5 grid-single">		
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/{{$i->image_link}}">
								<div class="thumb-image"> <img src="images/{{$i->image_link}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
							</li>
						</ul>
					</div>
					<!-- FlexSlider -->
					<script src="js/imagezoom.js"></script>
					<script defer src="js/jquery.flexslider.js"></script>
					<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
							$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
							});
						});
					</script>

				</div>	
				<div class="col-md-7 single-text">
					<div class="details-left-info simpleCart_shelfItem">
						<h3>Accessories Latest</h3>
						<p class="availability">Availability: <span class="color">In stock</span></p>
						<div class="price_single">
							<span>${{$i->price}}</span>
						</div>
						<h2 class="quick">Quick Overview</h2>
						<p class="quick_desc"> Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
						<h3>available Colors</h3>
						<ul class="product-colors">
							<li><a class="color1" href="#"><span> </span></a></li>
							<li><a class="color2" href="#"><span> </span></a></li>
							<li><a class="color3" href="#"><span> </span></a></li>
							<li><a class="color4" href="#"><span> </span></a></li>
							<li><a class="color5" href="#"><span> </span></a></li>
							<li><a class="color6" href="#"><span> </span></a></li>
							<li><a class="color7" href="#"><span> </span></a></li>
							<li><a class="color8" href="#"><span> </span></a></li>
						</ul>
						<h3>Length</h3>
						<ul class="size">
							<li><a href="#">7</a></li>
							<li><a href="#">6</a></li>
						</ul>
						
						<div class="clearfix"> </div>
						<div class="single-but item_add">
							<form action="{{route('add_to', $i->id)}}">
								<input type="submit" value="add to cart" class="btn btn-primary" />
							</form>
						</div>
						
					</div>
				</div>
				<div class="clearfix"></div>
				@endif 
				@endforeach
				@endforeach
			</div>
			<div class="col-md-4 products-grid-right">
				@include('web.sidebar')
			</div>
			<div class="clearfix"></div>
			<!-- collapse -->
			<br><br>
			<dl class="accordion">
				<dt>Description</dt>
				<dd>
					<p>In tipografia generalmente i capitoli vengono indicati con numeri romani e i paragrafi, qualora sia necessario, con numeri arabi. In caso di presenza di sottoparagrafi, soprattutto in testi scientifici molto strutturati, si usa invece indicare i capitoli, i paragrafi e i loro sottoparagrafi con cifre decimali separate da un punto. Ad esempio con 3.2.4 si indica il sottoparagrafo 4 del paragrafo 2 del capitolo 3.
					</p>
				</dd>
				<dt>Additional Information</dt>
				<dd>
					<p>In tipografia generalmente i capitoli vengono indicati con numeri romani e i paragrafi, qualora sia necessario, con numeri arabi. In caso di presenza di sottoparagrafi, soprattutto in testi scientifici molto strutturati, si usa invece indicare i capitoli, i paragrafi e i loro sottoparagrafi con cifre decimali separate da un punto. Ad esempio con 3.2.4 si indica il sottoparagrafo 4 del paragrafo 2 del capitolo 3.
					</p>
				</dd>
				<dt>Reviews</dt>
				<dd>
					<p>In tipografia generalmente i capitoli vengono indicati con numeri romani e i paragrafi, qualora sia necessario, con numeri arabi. In caso di presenza di sottoparagrafi, soprattutto in testi scientifici molto strutturati, si usa invece indicare i capitoli, i paragrafi e i loro sottoparagrafi con cifre decimali separate da un punto. Ad esempio con 3.2.4 si indica il sottoparagrafo 4 del paragrafo 2 del capitolo 3.
					</p>
				</dd>
				<dt>Help</dt>
				<dd>
					<p>In tipografia generalmente i capitoli vengono indicati con numeri romani e i paragrafi, qualora sia necessario, con numeri arabi. In caso di presenza di sottoparagrafi, soprattutto in testi scientifici molto strutturati, si usa invece indicare i capitoli, i paragrafi e i loro sottoparagrafi con cifre decimali separate da un punto. Ad esempio con 3.2.4 si indica il sottoparagrafo 4 del paragrafo 2 del capitolo 3.
					</p>
				</dd>
			</dl> 
			<!-- collapse -->
			<!--/start-latest-->
			<div class="collection-section">
				<h3 class="tittle">Related Products</h3>

				<div class="fashion-info">
					<div class="col-md-4 fashion-grids">
						<figure class="effect-bubba">
							<img src="images/f4.jpg" alt=""/>
							<figcaption>
								<h4>Nuevo Shop</h4>
								<p class="cart"><a href="#">Shop</a></p>				
							</figcaption>			
						</figure>		
					</div>
					<div class="col-md-4 fashion-grids">
						<figure class="effect-bubba">
							<img src="images/f5.jpg" alt=""/>
							<figcaption>
								<h4>Nuevo Shop</h4>
								<p class="cart"><a href="#">Shop</a></p>				
							</figcaption>			
						</figure>		
					</div>
					<div class="col-md-4 fashion-grids">
						<figure class="effect-bubba">
							<img src="images/f6.jpg" alt=""/>
							<figcaption>
								<h4>Nuevo Shop</h4>
								<p class="cart"><a href="#">Shop</a></p>							
							</figcaption>			
						</figure>		
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!--//latest-->
	</div>
</div>
<!-- //products -->
@include('web.footer')