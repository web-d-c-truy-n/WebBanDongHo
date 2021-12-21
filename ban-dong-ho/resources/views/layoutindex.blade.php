<!DOCTYPE html>
<html>

<head>
    <title>Đồng hồ</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Custom Theme files -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    @yield('css')
    <style>
        .site-footer {
            padding-bottom: 0
        }

        .site-footer .copyright-text,
        .site-footer .social-icons {
            text-align: center
        }
        }

        .social-icons {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .social-icons li {
            display: inline-block;
            margin-bottom: 4px
        }

        .social-icons li.title {
            margin-right: 15px;
            text-transform: uppercase;
            color: #96a2b2;
            font-weight: 700;
            font-size: 13px
        }

        .social-icons a {
            background-color: #eceeef;
            font-size: 16px;
            display: inline-block;
            line-height: 44px;
            width: 44px;
            height: 44px;
            text-align: center;
            margin-right: 8px;
            border-radius: 100%;
            -webkit-transition: all .2s linear;
            -o-transition: all .2s linear;
            transition: all .2s linear
        }

        .social-icons a:active,
        .social-icons a:focus,
        .social-icons a:hover {
            color: #fff;
            background-color: #29aafe
        }

        .social-icons.size-sm a {
            line-height: 34px;
            height: 34px;
            width: 34px;
            font-size: 14px
        }

        .social-icons a.facebook:hover {
            background-color: #3b5998
        }

        .social-icons a.twitter:hover {
            background-color: #00aced
        }

        .social-icons a.linkedin:hover {
            background-color: #007bb6
        }

        .social-icons a.dribbble:hover {
            background-color: #ea4c89
        }

        @media (max-width:767px) {
            .social-icons li.title {
                display: block;
                margin-right: 0;
                font-weight: 600
            }
        }

    </style>
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
    <!--webfont-->
    <!-- dropdown -->
    <script src="{{ asset('js/jquery.easydropdown.js') }}"></script>
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script src="{{ asset('js/scripts.js') }}" type="text/javascript"></script>
    <!--js-->
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="{{ asset('js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <!---- start-smoth-scrolling---->
</head>

<body>
    <!--banner-->
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script>
        $(function() {
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
                    <a href="/"><img src="{{ asset('images/Tp_watch__2_-removebg-preview.png') }}" class="imglogo"
                            alt="" /></a>
                </div>
                <div class="top-nav">
                    <label class="mobile_menu" for="mobile_menu">
                        <span>Menu</span>
                    </label>
                    <input id="mobile_menu" type="checkbox">
                    <ul class="nav">
                        <li class="dropdown1"><a href="{{ URL::to('/san-pham') }}">Sản phẩm</a>
                            <ul class="dropdown2">
                                @foreach ($thuongHieu as $th)
                                    <li><a
                                            href="{{ URL::to("/danh-sach-san-pham/$th->DUONGDAN") }}">{{ $th->TENTHUONGHIEU }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown1"><a href="{{ URL::to('/blog') }}">Blog</a>

                        </li>

                        <li class="dropdown1"><a href="{{URL::to("/dang-nhap")}}" class="openModal">{{Auth::user()->name??"TÀI KHOẢN"}}</a>

                        </li>
                        <a class="shop" href="{{ URL::to('/gio-hang') }}"><img
                                src="{{ asset('images/cart.png') }}" alt="" /><span class="badge"
                                id="soLuongGio">{{ $gioHang !== null && count($gioHang) != 0 ? count($gioHang) : '' }}</span></a>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="caption">
            <div class="slider">
                <div class="callbacks_container">
                    <ul class="rslides" id="slider">
                        <li>
                            <h1>WATCHES</h1>
                        </li>

                    </ul>
                    <p>Phần lớn mọi người dùng điện thoại để xem giờ<br /> nhưng <span><b>đồng hồ</b></span> vẫn luôn
                        mang <span><b>vẻ đẹp</b></span> và <span><b>hấp dẫn riêng</b></span></p>
                    <a class="morebtn" href="{{ URL::to('/san-pham') }}"><b>Mua sắm</b></a>
                </div>
            </div>
        </div>
        <div class="dwn">
            <a class="scroll" href="#cate"><img src="images/scroll.png" alt="" /></a>
        </div>
    </div>
    <!--/banner-->

    <div id="cate" class="categories">
        <div class="container">
            <h3>THƯƠNG HIỆU NỔI BẬT</h3>
            <div class="categorie-grids">
                <a href="bicycles.html">
                    <div class="col-md-4 cate-grid grid1">


                        <a class="store" href="bicycles.html">Brand</a>
                    </div>
                </a>
                <a href="bicycles.html">
                    <div class="col-md-4 cate-grid grid2">


                        <a class="store" href="bicycles.html">Brand</a>
                    </div>
                </a>
                <a href="bicycles.html">
                    <div class="col-md-4 cate-grid grid3">


                        <a class="store" href="bicycles.html">Brand</a>
                    </div>
                </a>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    @yield('rederbody')
    <div class="footer">
        <div class="container wrap">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul class="social-icons" style="margin-top: 37px">
                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                    <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
            <div class="ftr-menu">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ftr-menu" style="margin-top: -10px">
							<ul>
								<li><a href="http://localhost:8000/san-pham">SẢN PHẨM</a></li>
								<li><a href="http://localhost:8000/blog">BLOG</a></li>
							   
							</ul>
						</div>
                    </div>
                </div>
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
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                }
            }
        });
    });
</script>
<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
@include('common.themGio')
@yield('js')

</html>
