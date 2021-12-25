@extends('admin.layout')
@section('link')
    <li class="breadcrumb-item active" aria-current="page"><a href="{{URL::to('admin/order')}}">Đơn hàng</a> </li>
    <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
@endsection
@section('active_donHang','active')
@section('css')
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:400,300,700);

        body,
        html {
            height: 100%;
            margin: 0;
            font-family: lato;
        }

        h2 {
            margin-bottom: 0px;
            margin-top: 25px;
            text-align: center;
            font-weight: 200;
            font-size: 19px;
            font-size: 1.2rem;

        }

        .container {
            height: 100%;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            background: -webkit-linear-gradient(#c5e5e5, #ccddf9);
            background: linear-gradient(#c9e5e9, #ccddf9);
        }

        .dropdown-select.visible {
            display: block;
        }

        .dropdown {
            position: relative;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        ul li {
            list-style: none;
            padding-left: 10px;
            cursor: pointer;
        }

        ul li:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .dropdown-select {
            position: absolute;
            background: #77aaee;
            text-align: left;
            box-shadow: 0px 3px 5px 0px rgba(0, 0, 0, 0.1);
            border-bottom-right-radius: 5px;
            border-bottom-left-radius: 5px;
            width: 90%;
            left: 2px;
            line-height: 2em;
            margin-top: 2px;
            box-sizing: border-box;
        }

        .thin {
            font-weight: 400;
        }

        .small {
            font-size: 12px;
            font-size: .8rem;
        }

        .half-input-table {
            border-collapse: collapse;
            width: 100%;
        }

        .half-input-table td:first-of-type {
            border-right: 10px solid #4488dd;
            width: 50%;
        }

        .window {
            height: 540px;
            width: 800px;
            background: #fff;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            box-shadow: 0px 15px 50px 10px rgba(0, 0, 0, 0.2);
            border-radius: 30px;
            z-index: 10;
        }

        .order-info {
            height: 100%;
            width: 50%;
            padding-left: 25px;
            padding-right: 25px;
            box-sizing: border-box;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            position: relative;
        }

        .price {
            bottom: 0px;
            
            right: 0px;
            color: #4488dd;
        }

        .order-table td:first-of-type {
            width: 25%;
        }

        .order-table {
            position: relative;
        }

        .line {
            height: 1px;
            width: 100%;
            margin-bottom: 10px;
            background: #ddd;
        }

        .order-table td:last-of-type {
            vertical-align: top;
            padding-left: 25px;
        }

        .order-info-content {
            table-layout: fixed;

        }

        .full-width {
            width: 100%;
        }

        .pay-btn {
            border: none;
            background: #22b877;
            line-height: 2em;
            border-radius: 10px;
            font-size: 19px;
            font-size: 1.2rem;
            color: #fff;
            cursor: pointer;
            position: absolute;
            bottom: 25px;
            width: calc(100% - 50px);
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
        }

        .pay-btn:hover {
            background: #22a877;
            color: #eee;
            -webkit-transition: all .2s ease;
            transition: all .2s ease;
        }

        .total {
            margin-top: 25px;
            font-size: 20px;
            font-size: 1.3rem;
            
            bottom: 30px;
            right: 27px;
            left: 35px;
        }

        .dense {
            line-height: 1.2em;
            font-size: 16px;
            font-size: 1rem;
        }

        .input-field {
            background: rgba(255, 255, 255, 0.1);
            margin-bottom: 10px;
            margin-top: 3px;
            line-height: 1.5em;            
            font-size: 1rem;
            border: none;
            padding: 5px 10px 5px 10px;
            color: #fff;
            box-sizing: border-box;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .credit-info {
            background: #4488dd;
            height: 100%;
            width: 50%;
            color: #eee;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-size: 14px;
            font-size: .9rem;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            box-sizing: border-box;
            padding-left: 25px;
            padding-right: 25px;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            position: relative;
        }

        .dropdown-btn {
            background: rgba(255, 255, 255, 0.1);
            width: 100%;
            border-radius: 5px;
            text-align: center;
            line-height: 1.5em;
            cursor: pointer;
            position: relative;
            -webkit-transition: background .2s ease;
            transition: background .2s ease;
        }

        .dropdown-btn:after {
            content: '\25BE';
            right: 8px;
            position: absolute;
        }

        .dropdown-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            -webkit-transition: background .2s ease;
            transition: background .2s ease;
        }

        .dropdown-select {
            display: none;
        }

        .credit-card-image {
            display: block;
            max-height: 80px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 35px;
            margin-bottom: 15px;
        }

        .credit-info-content {
            margin-top: 25px;
            -webkit-flex-flow: column;
            -ms-flex-flow: column;
            flex-flow: column;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 100%;
        }

        @media (max-width: 600px) {
            .window {
                width: 100%;
                height: 100%;
                display: block;
                border-radius: 0px;
            }

            .order-info {
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                border-radius: 0px;
            }

            .credit-info {
                width: 100%;
                height: auto;
                padding-bottom: 100px;
                border-radius: 0px;
            }

            .pay-btn {
                border-radius: 0px;
            }
        }

    </style>
@endsection
@section('renderbody')
    <div class='container'>
        <div class='window'>
            <div class='order-info'>
                <div class='order-info-content' style="overflow: scroll;">
                    <h2>CHI TIẾT ĐƠN HÀNG</h2>
                    <div class='line'></div>
                    <table class='order-table'>
                        <tbody>
                            @foreach ($ct_donHang as $ct)
							@php
								$sanPham = $ct->SanPham()
							@endphp
                                <tr>
                                    <td><img src='{{ asset($sanPham->HinhAnh()->URL) }}'
                                            class='full-width' />
                                    </td>
                                    <td>
                                        <br> <span class='thin'>Tên sản phẩm: {{$sanPham->TENSP}}</span><br />
                                        <span class='thin'>Số lượng: {{$ct->SOLUONG}}</span><br />
                                        <span class='thin small'>Giá bán: {{$ct->GIABAN}}<br><br></span>
                                        <span class='thin small'>Giá khuyến mãi: {{$ct->GIAKHUYENMAI}}<br><br></span>
                                    </td>

                                </tr>
                                <tr>
									<td></td>
                                    <td>
                                        <div class='price'>Thành tiền: {{$ct->GIAKHUYENMAI * $ct->SOLUONG}}</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class='line'></div>
                    <div class='total'>
                        <span style='float:left;'>
							@php
								$sum = 0;
								$tongTien = 0;
								foreach ($ct_donHang as $ct) {
									$sum += $ct->SOLUONG;
									$tongTien += $ct->GIAKHUYENMAI * $ct->SOLUONG;
								}
							@endphp
                            <div class='thin dense'>Tổng số lượng sản phẩm</div>
                            <div class='thin dense'>Phí vận chuyển</div>
                            TỔNG TIỀN (VNĐ)
                        </span>
                        <span style='float:right; text-align:right;'>
                            <div class='thin dense'>{{$sum}}</div>
                            <div class='thin dense'>Miễn phí</div>
                            {{$tongTien}}
                        </span>
                    </div>
                </div>
            </div>
            <div class='credit-info'>
                <div class='credit-info-content'>
                    <table class='half-input-table'>
                        <tr>
                            <td>Thông tin khách hàng</td>
                            <td>
                                <div class='dropdown' id='card-dropdown'>

                                </div>
                            </td>
                        </tr>
                    </table>
                    Tên khách hàng
                    <input class='input-field' disabled value="{{$donHang->User()->HOTEN}}"/>
                    Địa chỉ
                    <input class='input-field' disabled value="{{$donHang->DIACHIGIAOHANG}}"/>
                    Ghi chú
                    <input class='input-field' disabled value="{{$donHang->GHICHU}}"/>
                    Ngày đặt
                    <input class='input-field' disabled value="{{$donHang->created_at}}" />
                    Ngày giao
                    <input class='input-field' disabled value="{{$donHang->NGAYGIAOHANG}}" />
                    Tình trạng đơn hàng
                    <input class='input-field' disabled value="{{$donHang->TRANGTHAI}}"/>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
