<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Game Box a Games a Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="http://localhost:8080/project/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script src="http://localhost:8080/project/js/bootstrap.js"></script>
<!-- Custom Theme files -->
<link href="http://localhost:8080/project/css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Game Box  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<script src="http://localhost:8080/project/js/jquery.min.js"></script>


<style>
	.dropbtn {
	  	background-color: white;
	    color: #69d2e8;
	    padding: 6px 20px;
	    font-size: 16px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	}

	.dropdown {
	  position: relative;
	  display: inline-block;
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  right: 0;
	  background-color: #f9f9f9;
	  min-width: 160px;
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	  z-index: 1;
	}

	.dropdown-content a {
	  color: black;
	  padding: 12px 16px;
	  text-decoration: none;
	  display: block;
	}

	.dropdown-content a:hover {
		background-color: #69d2e8;
	}

	.dropdown:hover .dropdown-content {
	  display: block;
	  z-index: 999999;
	}

	.dropdown:hover .dropbtn {
	  background-color: #03819c;
	}

	.btn-sl{
		background-color: red; /* Green */
  		border: none;
  		color: white;
  		padding: 15px 32px;
  		text-align: center;
  		text-decoration: none;
  		display: inline-block;
  		font-size: 16px;
	}
</style>

</head>
<body>
<!-- header -->
<div class="top-banner">
	 <div class="header">
		 <div class="container">
			 <div class="headr-left">
			 	<!-- bổ sung -->
				<div class="dropdown" style="float:left;">
				  <button class="dropbtn"><?= $this->session->userdata('member'); ?></button>
				  <div class="dropdown-content">
				  <a href="#">Link 1</a>
				  <a href="Login/logout">Logout</a>
				  </div>
				</div>
				 <!-- tới đây -->
				 <div class="social">							
						<a href="#"><i class="facebook"></i></a>
						<a href="#"><i class="twitter"></i></a>
						<a href="#"><i class="gplus"></i></a>	
						<a href="#"><i class="pin"></i></a>	
						<a href="#"><i class="youtube"></i></a>	
				 </div>
				 <div class="search">
					 <form>
						 <input type="submit" value="">
						 <input type="text" value="" placeholder="Search...">					 
					 </form>
				 </div>
				 <div class="clearfix"></div>
			 </div>
			 <div class="headr-right">
				 <div class="details">
					 <ul>
						 <li><a href="mailto@example.com"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>info(at)example.com</a></li>
						 <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(+1)000 123 456789</li>
					 </ul>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
	 <!--banner-info-->	
	 <div class="banner-info">
		  <div class="container">
			  <div class="logo">
					 <h1><a href="index.html">GAME BOX</a></h1>
			  </div>
			 <div class="top-menu">
				 <span class="menu"></span>
					<ul class="nav1">
						 <li class="active"><a href="index.html">Home</a></li>
						 <li><a href="about.html">About</a></li>
						 <li><a href="reviews.html">Reviews</a></li>
						 <li><a href="typo.html">News</a></li>
						 <li><a href="gallery.html">Gallery</a></li>
						 <li><a href="contact.html">Mail</a></li>
				  </ul>
			 </div>	
	 <!-- script-for-menu -->
						<script>
							 $( "span.menu" ).click(function() {
							$( "ul.nav1" ).slideToggle( 300, function() {
							// Animation complete.
								});
								});
						</script>
					<!-- /script-for-menu -->
			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- banner -->
	 <!-- Slider-starts-Here -->
	 <script src="http://localhost:8080/project/js/responsiveslides.min.js"></script>
	 <script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto:true,
			nav: false,
			speed: 500,
			namespace: "callbacks",
			pager:true,
		  });
		});
		
	   </script>
	 <div class="slider">
		  <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				<?php $mangsl = json_decode($mangsl,true) ?>
				<?php foreach ($mangsl as $key => $value): ?>
					
				
					<div class="slid banner<?= $key?>" style="background: url(<?= $value['slide_image'] ?>);">
						  <div class="caption">
								<h3><?= $value['title'] ?></h3>
								<p><?= $value['description'] ?></p>
								<a href="<?= $value['button_link'] ?>" class="btn-sl"><?= $value['button_text'] ?></a>
						  </div>
					</div>
					<!-- <div class="slid banner1">
						  <div class="caption">
								<h3>Donec id diam nec ex luctus congue nec sed mi.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
						  </div>
					</div> -->
				<?php endforeach ?>
				<!-- 
					 <div class="slid banner2">	
						  <div class="caption">
								<h3>Pellentesque eu ante quis elit interdum cursus.</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
						  </div>
					 </div>
				
				
					<div class="slid banner3">	
						<div class="caption">
							<h3>Fusce id urna ut felis feugiat fringilla sed quis nisl.</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nec pellentesque ex. Morbi iaculis mi in varius auctor. Nullam feugiat erat ex, eu vehicula velit efficitur non.</p>
						</div>
					</div>
				 -->
			  </ul>
		 </div>
	 </div>

<!-- content -->
<div class="content">
	 <div class="container">
		 <div class="top-games">
			 <h3>Top Games</h3>
			 <span></span>
		 </div>
		 <div class="top-game-grids">
			 <ul id="flexiselDemo1">
			 	<?php $mangpd = json_decode($mangpd,true) ?>
			 	<?php foreach ($mangpd as $key => $value): ?>
			 		<li>
					 	<div class="game-grid">
							<h4><?= $value['title'] ?></h4>
						 	<p><?= $value['description'] ?></p>
							<img src="<?= $value['product_image'] ?>" class="img-responsive" alt=""/>
					 	</div>	
				 	</li>
			 	<?php endforeach ?>
				 <!-- <li>
					 <div class="game-grid">
						 <h4>Action Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="http://localhost:8080/project/images/t1.jpg" class="img-responsive" alt=""/>
					 </div>	
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>Racing Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="http://localhost:8080/project/images/t3.jpg" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>3D Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="http://localhost:8080/project/images/t4.jpg" class="img-responsive" alt=""/>
					 </div>
				 </li>
				 <li>
					 <div class="game-grid">
						 <h4>Arcade Games</h4>
						 <p>Nulla elementum nunc tempus.</p>
						 <img src="http://localhost:8080/project/images/t2.jpg" class="img-responsive" alt=""/>
					 </div>	
				 </li>			 -->	 				 	
			 </ul>
			 
			 <script type="text/javascript">
			 $(window).load(function() {			
			  $("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover:true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 1
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 2
					},
					tablet: { 
						changePoint:768,
						visibleItems: 3
					}
				}
			});
			});
			</script>
			<script type="text/javascript" src="http://localhost:8080/project/js/jquery.flexisel.js"></script>	
		 </div>
	 </div>
</div>
<!-- latest -->
<div class="latest">
	 <div class="container">
		 <div class="latest-games">
			 <h3>Latest Games</h3>
			 <span></span>
		 </div>
		 <div class="latest-top">				
				<div class="col-md-5 trailer-text">
					<?php $mangtt = json_decode($mangtt,true) ?>
					<?php foreach ($mangtt as $key => $value): ?>
					<div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="<?= $value['news_image'] ?>" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#"><?= $value['title'] ?></a>
							 <p><?= $value['noidungtin'] ?></p>
					   </div>
					    <div class="clearfix"> </div>
				   	</div>
				   		
				   	<?php endforeach ?>
				   <!-- <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="http://localhost:8080/project/images/v2.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#">Killzone: Shadow Fall for PlayStation 4 Reviews</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="http://localhost:8080/project/images/v1.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#"> Spiderman 2 Full Version PC Game</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div>
				    <div class="sub-trailer">
				       <div class="col-md-4 sub-img">
							<img src="http://localhost:8080/project/images/v3.jpg" alt="img07"/>
					   </div>
					   <div class="col-md-8 sub-text">
					   		 <a href="#">Sega's: Jet Set for Andriod Play Store 4 Reviews</a>
							 <p>Lorem ipsum dolor sit amet, consectetur adipi…</p>
					   </div>
					    <div class="clearfix"> </div>
				   </div> -->
				</div>
				<div class="col-md-7 trailer">
				 <iframe src="https://www.youtube.com/embed/V5-DyoVlNOg?list=PLiVunv1pnIs2c0ORVqY60K3n8XMO9CoGp" frameborder="0" allowfullscreen></iframe>
				</div>
				 <div class="clearfix"> </div>
			</div>
	 </div>
</div>
<!-- poster -->
<div class="poster">
	 <div class="container">
		 <div class="poster-info">
			 <h3>Nunc cursus dui in metus efficitur, sit amet ullamcorper dolor viverra.</h3>
			 <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui euismod,
			 varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel
			 tempus. Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim. Morbi magna quam, molestie sed fermentum et, elementum at dolor</p>
			  <a class="hvr-bounce-to-bottom" href="reviews.html">Read More</a>
		 </div>
	 </div>
</div>
<!-- x-box -->
<div class="x-box">
	 <div class="container">	
		 <div class="x-box_sec">
			 <div class="col-md-7 x-box-left">
				 <h2>XBOX 360</h2>
				 <h3>Suspendisse ornare nisl et tellus convallis, non vehicula nibh convallis.</h3>
				 <p>Proin ornare metus eros, quis mattis lorem venenatis eget. Curabitur eget dui
				 euismod, varius nisl eu, pharetra lacus. Sed vehicula tempor leo. Aenean dictum suscipit magna vel tempus. 
				 Aliquam nec dui dolor. Quisque scelerisque aliquet est et dignissim.</p>
				 <a class="hvr-bounce-to-top" href="reviews.html">Read More</a>
			 </div>
			 <div class="col-md-5 x-box-right">
				 <img src="http://localhost:8080/project/images/xbox.jpg" class="img-responsive" alt=""/>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!-- footer -->
<div class="footer">
	 <div class="container">
		 <div class="footer-grids">
			 <div class="col-md-3 ftr-info">
				 <h3>About Us</h3>
				 <p>Sed faucibus mollis laoreet. Sed vehicula faucibus tristique lectus a orci molestie finibus. 
				 Suspendisse pharetra, metus sed rutrum pretium.</p>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Categories</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Action</a></li>
					 <li><a href="#">Racing</a></li>
					 <li><a href="#">Adventure</a></li>
					 <li><a href="#">Simulation</a></li>
					 <li><a href="#">Bike</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Platform</h3>
				 <ul class="ftr-list">
					 <li><a href="#">Pc</a></li>
					 <li><a href="#">Ps4</a></li>
					 <li><a href="#">XBOX 360</a></li>					 
					 <li><a href="#">XBOX ONE</a></li>
					 <li><a href="#">PSP</a></li>
				 </ul>				 
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h3>Information</h3>
				 <ul class="ftr-list">	
					 <li><a href="#">Contact Us</a></li>
					 <li><a href="#">Wish Lists</a></li>
					 <li><a href="#">Site Map</a></li>
					 <li><a href="#">Terms & Conditions</a></li>					 
				 </ul>				 
			 </div>		
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="copywrite">
	 <div class="container">
		 <p> © 2015 Game Box. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	 </div>
</div>
<!---->
</body>
</html>