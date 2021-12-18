@extends('layout')
@section('css')

@endsection
@section('js')
@endsection
@section('rederbody')
    <div class="cart">
        <div class="container">
            <div class="cart-top">
                <a href="index.html">&lt;&lt; home</a>
            </div>

            <div class="col-md-9 cart-items">
                <h2>My Shopping Bag ({{count($gioHang)}})</h2>
                <script>
                    $(document).ready(function(c) {
                        $('.close1').on('click', function(c) {
                            $(this).parents('.cart-header').fadeOut('slow', function(c) {
                                $(this).parents('.cart-header').remove();
                            });
                        });
                    });
                </script>        
                @php
                    $tong = 0;
                @endphp        
                @foreach ($gioHang as $gh)
                @php
                    $sanPham = $common->getSanPham($gh->idSP);
                @endphp
                <div class="cart-header">
                    <div class="close1" idSP="{{$gh->idSP}}"> </div>
                    <div class="cart-sec">
                        <div class="cart-item cyc">
                            <img src="{{$sanPham->HinhAnh()->URL}}">
                        </div>
                        <div class="cart-item-info">
                            <h3>{{$sanPham->TENSP}}<span>Model No: {{$sanPham->id}}</span></h3>
                            <h4>{{$sanPham->GIAMGIA}}<span>vnd</span></h4>
                            <p class="qty">Qty ::</p>
                            <input min="1" type="number" id="quantity" name="quantity" value="{{$gh->soLuong}}"
                                class="form-control input-small">
                        </div>
                        <div class="clearfix"></div>
                        <div class="delivery">
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>    
                @php
                    $tong+=$sanPham->GIAMGIA * $gh->soLuong;
                @endphp 
                @endforeach                          
            </div>

            <div class="col-md-3 cart-total">
                <a class="continue" href="/">Tiếp tục mua hàng</a>                
                <h4 class="last-price">TỔNG CỘNG</h4>
                <span class="total final">{{$tong}}</span>
                <div class="clearfix"></div>
                <a class="order" href="#">Thanh toán</a>                
            </div>
        </div>
    </div>
@endsection
