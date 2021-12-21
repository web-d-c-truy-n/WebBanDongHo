@extends('layout')
@section('css')

@endsection
@section('js')
@endsection
@section('rederbody')
    <div class="product">
        <div class="container">
            <div class="ctnt-bar cntnt">
                <div class="content-bar">
                    <div class="single-page">
                        <div class="product-head">
                            <a href="index.html">Home</a> <span>::</span>
                        </div>
                        <!--Include the Etalage files-->
                        <link rel="stylesheet" href="{{ asset('css/etalage.css') }} ">
                        <script src="{{ asset('js/jquery.etalage.min.js') }} "></script>
                        <script>
                            jQuery(document).ready(function($) {

                                $('#etalage').etalage({
                                    thumb_image_width: 400,
                                    thumb_image_height: 400,
                                    source_image_width: 800,
                                    source_image_height: 1000,
                                    show_hint: true,
                                    click_callback: function(image_anchor, instance_id) {
                                        alert('Callback example:\nYou clicked on an image with the anchor: "' +
                                            image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                                    }
                                });

                            });
                        </script>
                        <!--//details-product-slider-->
                        <div class="details-left-slider">
                            <div class="grid images_3_of_2">
                                <ul id="etalage" class="etalage" style="display: block; width: 400px; height: 537px;">
                                    <!--Ảnh đại diện-->
                                    <li class="etalage_thumb thumb_1"
                                        style="display: none; background-image: none; opacity: 0;">
                                            <img class="etalage_thumb_image" src="{{asset($sanPham->HinhAnh()->URL)}}"
                                                style="display: inline; width: 400px; height: 400px; opacity: 1;">
                                            <img class="etalage_source_image" src="{{asset($sanPham->HinhAnh()->URL)}}" title="">
                                    </li>
                                    <!--Album ảnh-->
                                    
                                    @for ($i=0;$i<count($sanPham->AlbumAnh());$i++ )
                                        <li class="{{"etalage_thumb thumb_".($i+2)}}"
                                            style="background-image: none; display: none; opacity: 0;">
                                            <img class="etalage_thumb_image" src="{{ asset($sanPham->AlbumAnh()[$i]->URL) }}"
                                                style="display: inline; width: 400px; height: 400px; opacity: 1;">
                                            <img class="etalage_source_image" src="{{ asset($sanPham->AlbumAnh()[$i]->URL) }}">
                                        </li>
                                    @endfor
                                    
                                   
                                    <li class="etalage_magnifier"
                                        style="margin: 0px; padding: 0px; left: 50px; top: 92.5px; display: none;">
                                        <div style="margin: 0px; padding: 0px; width: 300px; height: 215px;"><img
                                                src="{{asset($sanPham->HinhAnh()->URL)}}"
                                                style="margin: 0px; padding: 0px; width: 400px; height: 400px; display: inline;">
                                        </div>
                                    </li>
                                    <li class="etalage_icon"
                                        style="display: list-item; top: 276px; left: 20px; opacity: 1;">&nbsp;</li>
                                    <li class="etalage_hint"
                                        style="display: list-item; margin: 0px; top: -15px; right: -15px;">&nbsp;</li>
                                    <li class="etalage_zoom_area"
                                        style="margin: 0px; opacity: 0; left: 410px; display: none; background-image: none;">
                                        <div class="etalage_description"
                                            style="width: 560px; bottom: 0px; left: 0px; opacity: 0.7; display: none;">
                                        </div>
                                        <div style="width: 600px; height: 537px;"><img class="etalage_zoom_img"
                                                src="{{asset($sanPham->HinhAnh()->URL)}} " style="width: 800px; height: 1000px;"></div>
                                    </li>
                                    <li class="etalage_small_thumbs" style="width: 400px; top: 410px;">
                                        <ul style="width: 922px;">
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="details-left-info">
                            <h3>{{$sanPham->TENSP}}</h3>
                            <h4>Mã sản phẩm: {{$sanPham->id}}</h4>
                            <h4></h4>
                            <span><del>{{$sanPham->GIABAN}} vnd</del></span>
                            <p>{{$sanPham->GIAMGIA}} <label>vnd</label></p>
                            <div class="btn_form">
                                <a href="cart.html">Mua ngay</a>
                                <a href="#" onclick="themGioHang({{$sanPham->id}},1)">THÊM VÀO GIỎ</a>
                            </div>
                            <div class="bike-type">
                                <p>THƯƠNG HIỆU ::<a href="{{URL::to("/danh-sach-san-pham/".$sanPham->ThuongHieu()->DUONGDAN)}}">{{$sanPham->ThuongHieu()->TENTHUONGHIEU}}</a></p>
                            </div>
                            <h5>Nội dung tóm tắt ::</h5>
                            <p class="desc">{{$sanPham->NDTOMTAT}}</p>
                        </div>
                        <div class="clearfix"></div>
                        <p>{!!$sanPham->NOIDUNG!!}</p>
                    </div>
                </div>
            </div>
            <div class="single-bottom2">
                <h6>CÓ THỂ BẠN CŨNG THÍCH</h6>
                @foreach ($sanPham->SanPhamTuongTu() as $sp)
                <div class="product">
                    <div class="product-desc">
                        <div class="product-img product-img2">
                            <img src="{{ asset($sp->HinhAnh()->URL) }}" class="img-responsive " alt="">
                        </div>
                        <div class="prod1-desc">
                            <h5><a class="product_link" href="bicycles.html">{{$sp->TENSP}}</a></h5>
                            <p class="product_descr"> {{$sp->NDTOMTAT}} </p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="product_price">
                        <span class="price-access">{{$sp->GIAMGIA}}</span>
                        <a class="button1" onclick="themGioHang({{$sp->id}},1)" href="#"><span>Thêm giỏ</span></a>
                    </div>
                    <div class="clearfix"></div>
                </div> 
                @endforeach
                               
            </div>
        </div>
    </div>
@endsection
