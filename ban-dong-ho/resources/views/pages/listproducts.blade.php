@extends('layout')
@section('css')

@endsection
@section('js')
    
@endsection
@section('rederbody')

        <div class="mountain-sec">
            <h2 style="text-align: center">{{$th->TENTHUONGHIEU}}</h2>           
            @foreach ($dsSanPham as $sp)
            <a href="{{URL::to("/thong-tin-san-pham/$sp->DUONGDAN")}}"></a>
            <div class="bike"><a href="{{URL::to("/thong-tin-san-pham/$sp->DUONGDAN")}}">
                    <img src="{{ asset($sp->HinhAnh()->URL) }}" alt="">
                </a>
                <div class="bike-cost"><a href="single.html">
                        <div class="bike-mdl">
                            <h4>{{$sp->TENSP}}<span>Model:{{$sp->id}}</span></h4>
                        </div>
                    </a>
                    <div class="bike-cart"><a href="single.html">
                        </a><a class="buy" onclick="themGioHang({{$sp->id}},1)" href="#">THÊM VÀO GIỎ</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="fast-viw">
                    <a href="{{URL::to("/thong-tin-san-pham/$sp->DUONGDAN")}}">XEM NỘI DUNG</a>
                </div>
            </div>
            @endforeach                   
            <div class="clearfix"></div>
        </div>
@endsection
