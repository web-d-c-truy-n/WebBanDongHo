<!DOCTYPE html>
<html>
<head>
<title>Đồng hồ</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
						 <a href="/"><img src="{{asset('images/Tp_watch__2_-removebg-preview.png')}}" class="imglogo" alt=""/></a>
				   </div>							 
				  <div class="top-nav">										  
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">
						  <li class="dropdown1"><a href="{{URL::to("/san-pham")}}">Sản phẩm</a>
							  <ul class="dropdown2">
								  @foreach ($thuongHieu as $th )
									  <li><a href="{{URL::to("/danh-sach-san-pham/$th->DUONGDAN")}}">{{$th->TENTHUONGHIEU}}</a></li>
								  @endforeach												
							  </ul>
						  </li>
						  <li class="dropdown1"><a href="parts.html">Blog</a>
							 
						 </li>      
						 <li class="dropdown1"><a href="accessories.html">Liên hệ</a>
							
						 </li>               
						 <li class="dropdown1"><a href="#" class="openModal">TÀI KHOẢN</a>

						 </li>
						  <a class="shop" href="{{URL::to("/gio-hang")}}"><img src="{{asset('images/cart.png')}}" alt=""/><span class="badge" id="soLuongGio">{{$gioHang!==null?count($gioHang):""}}</span></a>
					  </ul>
				 </div>
				 <div class="clearfix"></div>
			 </div>
	  </div>	 
	 <div class="caption">
		 <div class="slider">
					   <div class="callbacks_container">
						   <ul class="rslides" id="slider">
							    <li><h1>WATCHES</h1></li>
								<li><h1>SPEED BICYCLE</h1></li>	
								<li><h1>MOUINTAIN BICYCLE</h1></li>	
						  </ul>
						  <p>Phần lớn mọi người dùng điện thoại để xem giờ<br/> nhưng <span><b>đồng hồ</b></span> vẫn luôn mang <span><b>vẻ đẹp</b></span> và <span><b>hấp dẫn riêng</b></span></p>
						  <a class="morebtn" href="bicycles.html"><b>SHOP WATCHES</b></a>
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
			 <a href="/"><img src="{{asset('images/Tp_watch__2_-removebg-preview.png')}}" class="imglogo2"alt=""/></a>
		</div>
		<div class="ftr-menu">
			 <ul>
				 <li><a href="bicycles.html">SẢN PHẨM</a></li>
				 <li><a href="parts.html">BLOG</a></li>
				 <li><a href="accessories.html">LIÊN HỆ</a></li>
				 <li><a href="404.html">TÀI KHOẢN</a></li>
			 </ul>
		</div>
		<div class="clearfix"></div>
	 </div>
</div>
@include('common.login')
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
   @include('common.themGio')
   @yield('js')
</html>

