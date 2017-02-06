@include('web.header')
<!--start-content-->
<!--products-->
<div class="products">
	<div class="container">
		<div class="products-grids row">
			<div class="col-md-8 products-grid-left">
				@foreach ($product->chunk(3) as $chunk)
				<div class="product-grid-lft row">
					@foreach($chunk as $item)
					@if($item->slug == 'sampleProduct')
					
					<div class="products-grd col-xs-4">
						<div class="p-one simpleCart_shelfItem prd">
							<a href="{{route('chitietsanpham.index', $item->id)}}">
								<img src="images/{{ $item->image_link }}" alt="" class="img-responsive" />
							</a>
							<h4>{{ $item->name}}</h4>
							<p><a class="item_add" href="#"><i class="glyphicon glyphicon-shopping-cart"></i> <span class=" item_price valsa">${{ $item->price}}</span></a></p>
							<div class="pro-grd">
								<a href="{{route('chitietsanpham.index', $item->id)}}">Quick View</a>
							</div>
						</div>	
					</div>
					
					@endif
					@endforeach
					
				</div>
				@endforeach
			</div>
			<div class="col-md-4 products-grid-right">
				@include('web.sidebar')
			</div>
		</div>
	</div>
</div>
<!-- //products -->
<!--start-footer-->
@include('web.footer');