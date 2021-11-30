<!DOCTYPE html>
<html>
<head>
<title>Đồng hồ</title>
<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
@yield('css')
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
<!--webfont-->
<!-- dropdown -->
<script src="{{asset('js/jquery.easydropdown.js')}}"></script>
<link href="{{asset('css/nav.css')}}" rel="stylesheet" type="text/css" media="all"/>
<script src="{{asset('js/scripts.js')}}" type="text/javascript"></script>
<!--js-->
<!---- start-smoth-scrolling---->
		<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!---- start-smoth-scrolling---->
</head>
<body>
<!--banner-->
<script src="{{asset('js/responsiveslides.min.js')}}"></script>
<script>  
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="banner-bg banner-bg1">	
	  <div class="container">
			 <div class="header">
			       <div class="logo">
						 <a href="index.html"><img src="images/logo.png" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><a href="bicycles.html">BICYCLES</a>
							  <ul class="dropdown2">
									<li><a href="bicycles.html">FIXED / SINGLE SPEED</a></li>
									<li><a href="bicycles.html">CITY BIKES</a></li>
									<li><a href="bicycles.html">PREMIMUN SERIES</a></li>												
							  </ul>
						  </li>
						  <li class="dropdown1"><a href="parts.html">PARTS</a>
							 <ul class="dropdown2">
									<li><a href="parts.html">CHAINS</a></li>
									<li><a href="parts.html">TUBES</a></li>
									<li><a href="parts.html">TIRES</a></li>
									<li><a href="parts.html">DISC BREAKS</a></li>
							  </ul>
						 </li>      
						 <li class="dropdown1"><a href="accessories.html">ACCESSORIES</a>
							 <ul class="dropdown2">
									<li><a href="accessories.html">LOCKS</a></li>
										<li><a href="accessories.html">HELMETS</a></li>
										<li><a href="accessories.html">ARM COVERS</a></li>
										<li><a href="accessories.html">JERSEYS</a></li>
							  </ul>
						 </li>               
						 <li class="dropdown1"><a href="404.html">EXTRAS</a>
							 <ul class="dropdown2">
									<li><a href="404.html">CLASSIC BELL</a></li>
									<li><a href="404.html">BOTTLE CAGE</a></li>
									<li><a href="404.html">TRUCK GRIP</a></li>
							  </ul>
						 </li>
						  <a class="shop" href="cart.html"><img src="images/cart.png" alt=""/></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>HANDMADE BICYCLE</h1></li>
								<li><h1>SPEED BICYCLE</h1></li>	
								<li><h1>MOUINTAIN BICYCLE</h1></li>	
						  </ul>
						  <p>You <span>create</span> the <span>journey,</span> we supply the <span>parts</span></p>
						  <a class="morebtn" href="bicycles.html">SHOP BIKES</a>
					  </div>
				  </div>
	 </div>
	 <div class="dwn">
		<a class="scroll" href="#cate"><img src="images/scroll.png" alt=""/></a>
	 </div>				 
</div>
<!--/banner-->

<div id="cate" class="categories">
	 <div class="container">
		 <h3>CATEGORIES</h3>
		 <div class="categorie-grids">
			 <a href="bicycles.html"><div class="col-md-4 cate-grid grid1">
				 <h4>FIXED / SINGLE SPEED</h4>
				 <p>Are you ready for the 27.5 Revloution ?</p>
				 <a class="store" href="bicycles.html">GO TO STORE</a>
			 </div></a>
			 <a href="bicycles.html"><div class="col-md-4 cate-grid grid2">
				 <h4>PREMIMUM SERIES</h4>
				 <p>Exclusive Bike Components</p>
				 <a class="store" href="bicycles.html">GO TO STORE</a>
			 </div></a>
			 <a href="bicycles.html"><div class="col-md-4 cate-grid grid3">
				 <h4>CITY BIKES</h4>
				 <p>Street Playground</p>
				 <a class="store" href="bicycles.html">GO TO STORE</a>
			 </div></a>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
@yield('rederbody')
<div class="footer">
	 <div class="container wrap">
		<div class="logo2">
			 <a href="index.html"><img src="images/logo2.png" alt=""/></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				 <li><a href="bicycles.html">BICYCLES</a></li>
				 <li><a href="parts.html">PARTS</a></li>
				 <li><a href="accessories.html">ACCESSORIES</a></li>
				 <li><a href="404.html">EXTRAS</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
<!---->

</body>
<script type="text/javascript">
	$(window).load(function() {			
	 $("#flexiselDemo1").flexisel({
	   visibleItems: 3,
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
   <script type="text/javascript" src="{{asset('js/jquery.flexisel.js')}}"></script>	
   @yield('js')
</html>
