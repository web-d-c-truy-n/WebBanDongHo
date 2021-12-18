<html>

<head>
    <title>Bike Shop a Ecommerce Category Flat Bootstarp Responsive Website Template| Parts :: w3layouts</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery (Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="{{ asset('css/form.css') }}" rel="stylesheet" type="text/css" media="all">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all">
    <!-- Custom Theme files -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords" content="Bike-shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design">
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!--webfont-->
    <link href="http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400" rel="stylesheet" type="text/css">
    @yield("css")
    <!--webfont-->
    <!-- dropdown -->
    <script src="{{ asset('js/jquery.easydropdown.js') }}"></script>
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('js/scripts.js') }}" type="text/javascript"></script>
    <!--js-->

</head>

<body>
    <!--banner-->
    <script src="{{ asset('js/responsiveslides.min.js') }}"></script>
    <script>
        $(function() {
            $("#slider").responsiveSlides({
                auto: false,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                pager: true,
            });
        });
    </script>
    <div class="banner-bg banner-sec">
        <div class="container">
            <div class="header">
                <div class="logo">
                    <a href="/"><img src="{{ asset('images/Tp_watch__2_-removebg-preview.png') }}" class="imglogo"
                            alt=""></a>
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
                                    <li><a href="{{URL::to("/danh-sach-san-pham/$th->DUONGDAN")}}">{{ $th->TENTHUONGHIEU }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown1"><a href="parts.html">blog</a>
                            
                        </li>
                        <li class="dropdown1"><a href="accessories.html">Liên hệ</a>
                            
                        </li>
                        <li class="dropdown1"><a href="#" class="openModal">TÀI KHOẢN</a>

                        </li>
                        <a class="shop" href="{{URL::to("/gio-hang")}}"><img src="{{asset('images/cart.png')}}" alt=""><span class="badge" id="soLuongGio">{{$gioHang!==null?count($gioHang):""}}</span></a>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--/banner-->
    @yield('rederbody')
    <div class="footer">
        <div class="container wrap">
            <div class="logo2">
                <a href="/"><img src="{{ asset('images/Tp_watch__2_-removebg-preview.png') }}" class="imglogo2"
                        alt=""></a>
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
    @include('common.themGio')
    @yield("js")
</body>

</html>
