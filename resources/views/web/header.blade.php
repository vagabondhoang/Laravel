<!DOCTYPE HTML>
<html>
<head>
<title>Nuevo Shop a Ecommerce Online Shopping Flat Bootstarp Resposive Website Template |Single :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Nuevo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijegleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />	
<script src="{{asset('js/jquery-1.11.1.min.js')}}"></script>
<!-- start menu -->
<link href="{{asset('css/megamenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{asset('js/megamenu.js')}}"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="{{asset('js/menu_jquery.js')}}"></script>
<script src="{{asset('js/simpleCart.min.js')}}"> </script>
<script src="{{asset('js/bootstrap.js')}}"> </script>
<script src="{{asset('js/accordion.js')}}"> </script>
<!--web-fonts-->
 <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,700' rel='stylesheet' type='text/css'>
 <link href='//fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
<!--//web-fonts-->
<script src="{{asset('js/modernizr.custom.js')}}"></script>
<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" />

<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!-- the jScrollPane script -->
<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<!-- //the jScrollPane script -->
</head>
<body class="jsOff">
	<!--start-home-->
	<div class="top_bg" id="home">
		<div class="container">
			<div class="header_top">
				<div class="top_right">
					<ul>
						<li><a href="#">help</a></li>
						<li><a href="{{route('contact.index')}}">Contact</a></li>
						<li><a href="#">Delivery information</a></li>
					</ul>
				</div>
				<div class="top_left">
					<h6><span></span> Call us : 032 2352 782</h6>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--header-->
	<div class="header_bg">
		<div class="container">
			<div class="header">
				<div class="head-t">
					<div class="logo">
						<a href="{{route('trangchu')}}"><h1>Nuevo <span>Shop</span></h1> </a>
					</div>
					<div class="header_right">
						<div class="cart box_1">
							<a href="checkout.html">
								<div class="total">
									<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
									<i class="glyphicon glyphicon-shopping-cart"></i></a>
									<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
									<div class="clearfix"> </div>
								</div>				 
							</div>
							<div class="clearfix"></div>	
						</div>
						<!--start-header-menu-->
						<ul class="megamenu skyblue">
							<li class="active grid"><a class="color1" href="{{route('trangchu')}}">Home</a></li>
							@foreach($menu as $level1)
							@if($level1->parent_id == 0)
							<li class="grid"><a class="color2" href="#">{{$level1->name}}</a>
								<div class="megapanel">
									<div class="row">
									@foreach($menu as $level2)
									@if($level2->parent_id == 1)
										<div class="col1">
											<div class="h_nav">
												<h4>{{$level2->name}}</h4>
												<ul>
												<?php $menu = App\Menu::all(); ?>
												@foreach($menu as $level3)
												@if($level3->parent_id == $level2->id)
													<li><a href="product.html">{{$level3->name}}</a></li>
												@endif
												@endforeach	
												</ul>	
											</div>							
										</div>
									@endif
									@endforeach	
									</div>
									<div class="row">
										<div class="col2"></div>
										<div class="col1"></div>
										<div class="col1"></div>
										<div class="col1"></div>
										<div class="col1"></div>
									</div>
								</div>
							</li>
							@endif
							@endforeach
						</ul> 
					</div>
				</div>
			</div>