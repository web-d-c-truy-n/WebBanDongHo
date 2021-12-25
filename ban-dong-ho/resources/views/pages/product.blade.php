@extends('layout')
@section('css')

@endsection
@section('rederbody')
    <div class="parts">
        <div class="container">
            <h2>SẢN PHẨM</h2>
            <div class="bike-parts-sec">
                <div class="bike-parts">
                    <div class="top">
                        <ul>
                            @if (!empty($th))
                                <li><a href="index.html">{{ $th->TENTHUONGHIEU }}</a></li>
                            @else
                                <li><a href="index.html">home</a></li>
                            @endif

                        </ul>
                    </div>
                    <div class="bike-apparels" id="sanPham">
                        @foreach ($dsSanPham as $index => $sp)
                            @if ($index % 4 == 0)
                                <div class="parts1">
                            @endif

                            <a href="single.html"></a>
                            <div class="part-sec"><a href="single.html">
                                    <img src="{{ asset($sp->HinhAnh()->URL) }}" alt="">
                                </a>
                                <div class="part-info"><a href="single.html">
                                    </a><a href="#">
                                        <h5>{{ $sp->TENSP }}<span><del>{{ $sp->GIABAN }}
                                                    vnd</del></span><span>{{ $sp->GIAMGIA }}</span></h5>
                                    </a>
                                    <a class="add-cart" href="{{URL::to("/thong-tin-san-pham/$sp->DUONGDAN")}}">Xem nhanh</a>
                                    <a class="qck" href="#!" onclick="themGioHang({{$sp->id}},1)">Mua ngay</a>
                                </div>
                            </div>
                            @if ($index % 4 == 3 || $index == count($dsSanPham) - 1)
                                <div class="clearfix"></div>
                    </div>
                    @endif
                    @endforeach
                    {{ $dsSanPham->links() }}
                </div>
            </div>
            <div class="rsidebar span_1_of_left">
                <section class="sky-form">
                    <div class="product_right">

                        <section class="sky-form">
                            <h4>Thương hiệu</h4>
                            <div class="row row1 scroll-pane">
                                <div class="col col-4">
                                    <label class="checkbox"><input type="radio" class="thuongHieu" name="checkbox"
                                            {{ empty($th) ? 'checked' : '' }}><i></i>Tất cả</label>
                                </div>
                                <div class="col col-4">
                                    @foreach ($thuongHieu as $TH)
                                        <label class="checkbox"><input type="radio" class="thuongHieu"
                                                name="checkbox" value="{{ $TH->DUONGDAN }}"
                                                {{ !empty($th) && $th->id == $TH->id ? 'checked' : '' }}><i></i>{{ $TH->TENTHUONGHIEU }}</label>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <section class="sky-form">
                            <h4>Tầm giá</h4>
                            <div class="row row1">
                                <div class="col col-4">
                                    <label class="checkbox"><input type="checkbox" class="locGia" value="1"
                                            name="checkbox"><i></i>dưới 1 triệu</label>
                                    <label class="checkbox"><input type="checkbox" class="locGia" value="2"
                                            name="checkbox"><i></i>Từ 1 triệu - 3 triệu</label>
                                    <label class="checkbox"><input type="checkbox" class="locGia" value="3"
                                            name="checkbox"><i></i>Từ 3 triệu - 5 triệu</label>
                                    <label class="checkbox"><input type="checkbox" class="locGia" value="4"
                                            name="checkbox"><i></i>Trên 5 triệu</label>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-block btn-success" id="loc"
                                    style="background-color:#464646">Lọc</button>
                            </div>
                        </section>
                    </div>
                    <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $(".thuongHieu").click(function(e) {
                if ($(this).attr("value") === undefined) {
                    window.location.href = "{{ URL::to('/san-pham') }}"
                } else {
                    window.location.href = "{{ URL::to('/danh-sach-san-pham') }}/" + $(this).attr("value");
                }
            });
            $("#loc").click(function() {
                let locGia = []
                @if (!empty($th))
                    let thuongHieu = "{{ $th->DUONGDAN }}"
                @else
                    let thuongHieu = ""
                @endif
                $(".locGia:checked").each(function() {
                    switch ($(this).val()) {
                        case "1":
                            locGia.push({
                                GiaDau: 0,
                                GiaCuoi: 1000000
                            })
                            break;
                        case "2":
                            locGia.push({
                                GiaDau: 1000000,
                                GiaCuoi: 3000000
                            })
                            break;
                        case "3":
                            locGia.push({
                                GiaDau: 3000000,
                                GiaCuoi: 5000000
                            })
                            break;
                        case "4":
                            locGia.push({
                                GiaDau: 5000000,
                                GiaCuoi: 1000000000000
                            })
                            break;
                    }
                })
                $.ajax({
                    type: "POST",
                    url: "{{ URL::to('loc-gia') }}",
                    data: {
                        khoanGia: locGia,
                        thuongHieu: thuongHieu,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: "json",
                    success: function(rs) {
                        function html(p) {
                            let asset = "{{ asset('') }}"
                            return `
                    <a href="single.html"></a>
                    <div class="part-sec"><a href="single.html">					 
                        <img src="${asset+"/"+p.HinhAnh.URL}" alt="">
                        </a><div class="part-info"><a href="single.html">
                            </a><a href="#"><h5>${p.TENSP}<span><del>${p.GIABAN} vnd</del></span><span>${p.GIAMGIA}</span></h5></a>
                            <a class="add-cart" href="{{URL::to("/thong-tin-san-pham")}}/${p.DUONGDAN}">Xem nhanh</a>
                            <a class="qck" href="#!" onclick="themGioHang(${p.id},1)">Mua ngay</a>
                        </div>
                    </div>  
                    `
                        }
                        let html2 = ""
                        rs.sanPham.forEach((item, index) => {
                            if (index % 4 == 0)
                                html2 += `<div class="parts1">`
                            html2 += html(item)
                            if (index % 4 == 3) {
                                html2 += `<div class="clearfix"></div></div>`
                            }
                        })
                        $("#sanPham").html(html2)
                    }
                });
            })
        });
    </script>
    @include('common.themGio')
@endsection
