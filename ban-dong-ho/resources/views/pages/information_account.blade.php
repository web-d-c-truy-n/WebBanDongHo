@extends('layout')
@section('rederbody')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/argon.css') }}" type="text/css" />
@endsection
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Thông tin cá nhân</h3>
                </div>
                <div class="col-4 text-right">
                    <button onclick="chinhSua()" class="btn btn-sm btn-primary">Chỉnh sửa</button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form id="chinhSua" action="{{ URL::to('sua-tk') }}" method="POST">
                @csrf
                <h6 class="heading-small text-muted mb-4">Thông tin cá nhân</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-username">Username</label>
                                <input type="text" id="input-username" class="form-control" name="name"
                                    placeholder="Username" value="{{ $user->name }}" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-email">Mail</label>
                                <input type="email" id="input-email" class="form-control" placeholder="Mail"
                                    name="email" value="{{ $user->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Họ và tên</label>
                                <input type="text" id="input-first-name" class="form-control" name="HOTEN"
                                    placeholder="Name" value="{{ $user->HOTEN }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Điện thoại</label>
                                <input type="tel" id="input-first-name" class="form-control" name="SDT"
                                    placeholder="Phone" value="{{ $user->SDT }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Ngày sinh</label>
                                <input type="date" class="form-control" name="NGAYSINH" value="{{ $user->NGAYSINH }}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Giới tính</label>
                                <select class="form-control" style="margin-top:0px;" name="GIOITINH">
                                    @if ($user->GIOITINH == 1)
                                        <option selected value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                        <option value="3">Khác</option>
                                    @elseif ($user->GIOITINH)
                                        <option value="1">Nam</option>
                                        <option selected value="2">Nữ</option>
                                        <option value="3">Khác</option>
                                    @else
                                        <option value="1">Nam</option>
                                        <option value="2">Nữ</option>
                                        <option selected value="3">Khác</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Mật khẩu cũ</label>
                                <input type="password" id="input-old-password" class="form-control"
                                    placeholder="Password" value="">
                                <p style="color: red; display: none" id="SaiMK">Sai mật khẩu</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="input-first-name">Mật khẩu mới</label>
                                <input type="password" id="input-new-password" class="form-control"
                                    placeholder="New Password" value="">
                            </div>
                        </div>
                    </div>
                    <a href="#!" class="btn btn-sm btn-primary" id="doiMatKhau"
                        style="margin-left:auto;margin-right:auto;display:block;margin-bottom:0%">Đổi mật
                        khẩu</a>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="form-control-label" for="input-first-name">Facebook</label>
                            <input type="text" id="input-first-name" class="form-control" placeholder="Facebook ID"
                                value="{{ $user->FACEBOOK_ID }}" disabled>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Thông tin liên hệ</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-control-label" for="input-address">Địa chỉ</label>
                                <input id="input-address" class="form-control" placeholder="Andress" name="DIACHI"
                                    value="{{ $user->DIACHI }}" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-city">Tỉnh/ Thành phố</label><br />
                                <select class="field-input form-control" id="tinhThanh" name="MATINH">
                                    @foreach ($diaDiem['tinhThanh'] as $dd)
                                        @if ($dd['selected'])
                                            <option value="{{ $dd['value'] }}" selected>{{ $dd['name'] }}</option>
                                        @else
                                            <option value="{{ $dd['value'] }}">{{ $dd['name'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Quận/ Huyện</label><br />
                                <select class="field-input form-control" id="quanHuyen" name="MAQUAN_HUYEN">
                                    @foreach ($diaDiem['quanHuyen'] as $dd)
                                        @if ($dd['selected'])
                                            <option value="{{ $dd['value'] }}" selected>{{ $dd['name'] }}</option>
                                        @else
                                            <option value="{{ $dd['value'] }}">{{ $dd['name'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="input-country">Xã/ Phường/ Thị
                                    trấn</label>
                                <select class="field-input form-control" id="phuongXa" name="MAPHUONG_XA">
                                    @foreach ($diaDiem['phuongXa'] as $dd)
                                        @if ($dd['selected'])
                                            <option value="{{ $dd['value'] }}" selected>{{ $dd['name'] }}</option>
                                        @else
                                            <option value="{{ $dd['value'] }}">{{ $dd['name'] }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">Giới thiệu</h6>
                <div class="pl-lg-4">
                    <div class="form-group">
                        <label class="form-control-label">About Me</label>
                        <textarea rows="4" class="form-control" placeholder=""
                            name="GHICHU">{{ $user->GHICHU }}</textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- Core -->
<script src="http://localhost:8000/templateAdmin/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js">
</script>
<!-- Optional JS -->
<script src="http://localhost:8000/templateAdmin/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="http://localhost:8000/templateAdmin/assets/js/argon.js?v=1.2.0"></script>
@include('common.layCacTinhThanh')
    <script>
        function chinhSua(){
            $("#chinhSua").submit()
        }
        $(document).ready(function () {
            $("#doiMatKhau").click(function (e) { 
                let matKhauCu = $("#input-old-password").val();
                let matKhauMoi = $("#input-new-password").val();
                $.ajax({
                    type: "POST",
                    url: "{{URL::to('doi-mat-khau')}}",
                    data: {mkCu: matKhauCu, mkMoi: matKhauMoi, _token: "{{ csrf_token() }}" },
                    dataType: "json",
                    success: function (rs) {
                        if(rs.kq == 1){
                            $("#SaiMK").show();
                        }else if(rs.kq == 2){
                            alert("Đổi mật khẩu thành công")
                        }
                    },
                    error: function(){
                        alert("Lỗi")
                    }
                });                
            });
        });
    </script>
@endsection
