<div class="w_sidebar">
					<div class="w_nav1">
						<h4>All</h4>
						<ul>
							<li><a href="product.html">women</a></li>
							<li><a href="#">new fashions</a></li>
							<li><a href="#">trends</a></li>
							<li><a href="#">boys</a></li>
							<li><a href="#">girls</a></li>
							<li><a href="#">sale</a></li>
						</ul>	
					</div>
					<section  class="sky-form">
						<h4>catogories</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Men's Jackets</label>
							</div>
							<div class="col col-4">
								@foreach($categories as $item)
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>{{$item->title}}</label>
								@endforeach
							</div>
						</div>
					</section>
					<section  class="sky-form">
						<h4>brand</h4>
						<div class="row1 scroll-pane">
							<div class="col col-4">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Lee</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Anouk</label>
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>tempore</label>
							</div>
							<div class="col col-4">
								@foreach($product as $item)
								<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>{{$item->brand}}</label>
								@endforeach
							</div>
						</div>
					</section>
				</div>