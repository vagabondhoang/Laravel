<!--start-bottom-->
<!--start-image-cursuals-->
<div class="scroll-slider">
	<div class="container"> 											 
		<div class="nbs-flexisel-container">
			<div class="nbs-flexisel-inner">
				<ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">
					@foreach($imageList as $item)
					@if($item->slug == "logo")
					<li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;">
						<img src="images/{{$item->image_link}}" alt=""/>
					</li>
					@endif
					@endforeach
				</ul>
				<div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div>
				<div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div>
			</div>
		</div>
		<div class="clearfix"> </div>      
		<!--start-image-->
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
		<!--//end-->
		<script type="text/javascript">
			$(window).load(function() {
				$(".flexiselDemo3").flexisel({
					visibleItems: 5,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,            
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 2
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 3
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
			});
		</script>
		<!---->
	</div>				
</div>
<!--//end-bottom-->

<div class="footer">
	<div class="container">
		<div class="footer-top">
			<div class="col-md-2 footer-left">
				<h3>About Us</h3>
				<ul>
					<li><a href="#">Who We Are</a></li>
					<li><a href="contact.html">Contact Us</a></li>
					<li><a href="#">Our Sites</a></li>
					<li><a href="#">In The News</a></li>
					<li><a href="#">Carrers</a></li>					 
				</ul>
			</div>
			<div class="col-md-2 footer-left">
				<h3>Your Account</h3>
				<ul>
					<li><a href="account.html">Your Account</a></li>
					<li><a href="#">Personal Information</a></li>
					<li><a href="contact.html">Addresses</a></li>
					<li><a href="#">Discount</a></li>
					<li><a href="#">Track your order</a></li>					 					 
				</ul>
			</div>
			<div class="col-md-2 footer-left">
				<h3>Shopping</h3>
				<ul>
					<li><a href="#">Accesories</a></li>
					<li><a href="#">Books</a></li>
					<li><a href="#">Cloths</a></li>
					<li><a href="#">Bags</a></li>
					<li><a href="#">Shoes</a></li>					 
				</ul>
			</div>
			<div class="col-md-2 footer-left ">
				<h3>Categories</h3>
				<ul>
					<li><a href="#">Sports Shoes</a></li>
					<li><a href="#">Casual Shorts</a></li>
					<li><a href="#">Formal Shoes</a></li>
					<li><a href="#">Party Wear</a></li>
					<li><a href="#">Ethnic Wear</a></li>				 
				</ul>
			</div>
			<div class="col-md-2 footer-left lost">
				<h3>Life Style</h3>
				<ul>
					<li><a href="#">Spa</a></li>
					<li><a href="#">Beauty</a></li>
					<li><a href="#">Travel</a></li>
					<li><a href="#">Food</a></li>
					<li><a href="#">Trends</a></li>					 
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>

	</div>
</div>
<ul class="socials">
	<li><a class="soc1" href="#"></a></li>
	<li><a class="soc2" href="#"></a></li>
	<li><a class="soc3" href="#"></a></li>
</ul>
<!--/start-copyright-->
<div class="copy">
	<div class="container">
		<p>&copy; 2015 Nuevo Shop. All Rights Reserved | Design by <a href="http://w3layouts.com/">W3layouts</a> </p>
	</div>
</div>
<!--//end-copyright-->
<!--end-footer-->
<!--//end-content-->
<!--start-smooth-scrolling-->
<script type="text/javascript">
	$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
								 		*/
								 		
								 		$().UItoTop({ easingType: 'easeOutQuart' });
								 		
								 	});
								 </script>
								 <a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


								</body>
								</html>