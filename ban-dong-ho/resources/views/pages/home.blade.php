@extends('layoutindex')
@section('css')

@endsection
@section('js')

@endsection
@section('rederbody')
    <!--bikes-->
    <div class="bikes">
        <h3>POPULAR WATCHES</h3>
        <div class="bikes-grids">
            <div class="nbs-flexisel-container">
                <div class="nbs-flexisel-inner row">
                        @foreach ($sanPhamMoi as $sp)
                        <div class="nbs-flexisel-item col-md-3">
                            <img src="{{ asset($sp->HinhAnh()->URL) }}" alt="">
                            <div class="bike-info">
                                <div class="model">
                                    <h4>{{$sp->TENSP}}<span>{{$sp->GIAMGIA}}</span></h4>
                                </div>
                                <div class="model-info">
                                    <a href="#" onclick="themGioHang({{$sp->id}},1)">THÊM VÀO GIỎ</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="viw">
                                <a href="{{URL::to("/thong-tin-san-pham/$sp->DUONGDAN")}}">Xem nhanh</a>
                            </div>
                        </div>
                        @endforeach

                    <div class="nbs-flexisel-nav-left" style="top: 174.5px;"></div>
                    <div class="nbs-flexisel-nav-right" style="top: 174.5px;"></div>
                </div>
            </div>
            <script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
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
        </div>
    </div>
    <!---->
    <div class="contact">
        <div class="container">
            <h3>CONTACT US</h3>
            <p>Please contact us for all inquiries and purchase options.</p>
            <form>
                <input type="text" placeholder="NAME" required="">
                <input type="text" placeholder="SURNAME" required="">
                <input class="user" type="text" placeholder="EMAIL" required=""><br>
                <textarea placeholder="MESSAGE"></textarea>
                <input type="submit" value="SEND">
            </form>
        </div>
    </div>
    <!---->
@endsection
