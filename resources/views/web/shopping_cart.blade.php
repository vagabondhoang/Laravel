<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.1.1.min.js"></script>
</head>

<body >

	<nav class="navbar">
		<div class="container">
			<a class="navbar-brand" href="#">Your online store</a>
			<div class="navbar-right">
				<div class="container minicart">{{$count}}</div>
			</div>
		</div>
	</nav>

	<div class="container-fluid breadcrumbBox text-center">
		<ol class="breadcrumb">
			<li><a href="#">Review</a></li>
			<li class="active"><a href="#">Order</a></li>
			<li><a href="{{route('checkout')}}">Payment</a></li>
		</ol>
	</div>

	<div class="container text-center">

		<div class="col-md-5 col-sm-12">
			<div class="bigcart"></div>
			<h1>Your shopping cart</h1>
			<p>
				This is a free and <b><a href="http://tutorialzine.com/2014/04/responsive-shopping-cart-layout-twitter-bootstrap-3/" title="Read the article!">responsive shopping cart layout, made by Tutorialzine</a></b>. It looks nice on both desktop and mobile browsers. Try it by resizing your window (or opening it on your smartphone and pc).
			</p>
		</div>

		<div class="col-md-7 col-sm-12 text-left">
			<div class="table-responsive">          
				<table class="table">
					<thead>
						<tr>
							
							<th>ITEM</th>
							<th>Unit Price</th>
							<th>Quantity</th>
							<th>Total</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>
					</thead>
					<tbody data-token="{{ csrf_token() }}">
						@foreach($content as $item)
						<tr>
							<td>{{$item->name}}</td>
							<td>{{number_format($item->price,0,',','.')}}</td>
							<td><input class="qty" type="text" name="" value="{{$item->qty}}"></td>
							<td>{{number_format($item->price*$item->qty,0,',','.')}}</td>
							<td >
								<form action="#" >
									{{ csrf_field() }}
									<button class="btn btn-success updateCart" id="{{$item->rowId}}">
										<i class="glyphicon glyphicon-pencil"></i> Update
									</button>
								</form>	
							</td>
							<td>
								<form action="{{ route('xoasanpham',$item->rowId) }}" >
									{{ method_field('DELETE') }}
									{{ csrf_field() }}
									<button type="submit" class="btn btn-success" onclick="return confirm('ban co chac la muon xoa khong?')"><i class="glyphicon glyphicon-trash"></i>Delete</button>
								</form>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<table class="table table-bordered">
				<tr>
					<td>Subtotal</td>
					<td>{{$subtotal}}</td>
				</tr>
				<tr>
					<td>Total</td>
					<td>{{$subtotal}}</td>
				</tr>
			</table>

			<button class="btn btn-success" ><a href="{{route('checkout')}}" style="color: #fff">Payment</a></button>
		</div>

	</div>

	<!-- The popover content -->

	<div id="popover" style="display: none">
		<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
		<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
	</div>

	<!-- JavaScript includes -->

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/customjs.js"></script>
	<script type="text/javascript">
		
		$('.updateCart').click(function() {
			var rowid = $(this).attr('id');
			var qty = $(this).parent().parent().parent().find('.qty').val();
			var token = $('tbody').data('token');
			$.ajax({
				url:'cap-nhat/'+rowid+'/'+qty,
				type: 'GET',
				cache:false,
				data:{
					'_token':token,
					'id':rowid,
					'qty':qty
				},
				success: function(data) {
					if(data == "ok") {
						window.location ='gio-hang';
					}
				}
			});
		});
		
	</script>
</body>
</html>