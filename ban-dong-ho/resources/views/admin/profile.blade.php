@extends('admin.layout')
@section('link')
    
    <li class="breadcrumb-item active" aria-current="page">Thông tin cá nhân</li>
@endsection
@section('active_ttCaNhan','active')
@section('renderbody')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col-xl-4 order-xl-2">
                <div class="card card-profile">

                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">

                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                        <div class="d-flex justify-content-between">
                            <a href="#" class="btn btn-sm btn-info  mr-4 ">Connect</a>
                            <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="card-profile-stats d-flex justify-content-center">
                                    <div>
                                        <span class="heading">22</span>
                                        <span class="description">Friends</span>
                                    </div>
                                    <div>
                                        <span class="heading">10</span>
                                        <span class="description">Photos</span>
                                    </div>
                                    <div>
                                        <span class="heading">89</span>
                                        <span class="description">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <h5 class="h3">
                                {{ $user->HOTEN }}<span class="font-weight-light"></span>
                            </h5>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ $user->SDT }}
                            </div>
                            <div class="h5 font-weight-300">
                                <i class="ni location_pin mr-2"></i>{{ $user->email }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 order-xl-1">
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
                        <form id="chinhSua" action="{{URL::to("admin/sua-tk")}}" method="POST">
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
                                            <input type="email" id="input-email" class="form-control" placeholder="Mail" name="email"
                                                value="{{ $user->email }}">
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
                                                placeholder="Phone" value="{{$user->SDT}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Ngày sinh</label>
                                            <input type="date" class="form-control" name="NGAYSINH" value="{{$user->NGAYSINH}}">
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
                                        <input type="text" id="input-first-name" class="form-control"
                                            placeholder="Facebook ID" value="{{$user->FACEBOOK_ID}}" disabled>
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
                                            <input id="input-address" class="form-control" placeholder="Andress" name="DIACHI" value="{{$user->DIACHI}}"
                                                type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-city">Tỉnh/ Thành phố</label><br />
                                            <select class="field-input form-control" id="tinhThanh" name="MATINH">
                                                @foreach ($diaDiem["tinhThanh"] as $dd)
													@if ($dd["selected"])
														<option value="{{$dd["value"]}}" selected>{{$dd["name"]}}</option>
													@else
													<option value="{{$dd["value"]}}">{{$dd["name"]}}</option>
													@endif
												@endforeach                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-country">Quận/ Huyện</label><br />
                                            <select class="field-input form-control" id="quanHuyen" name="MAQUAN_HUYEN">                                                
													@foreach ($diaDiem["quanHuyen"] as $dd)
													@if ($dd["selected"])
														<option value="{{$dd["value"]}}" selected>{{$dd["name"]}}</option>
													@else
													<option value="{{$dd["value"]}}">{{$dd["name"]}}</option>
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
													@foreach ($diaDiem["phuongXa"] as $dd)
													@if ($dd["selected"])
														<option value="{{$dd["value"]}}" selected>{{$dd["name"]}}</option>
													@else
														<option value="{{$dd["value"]}}">{{$dd["name"]}}</option>
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
                                    <textarea rows="4" class="form-control" placeholder="" name="GHICHU">{{$user->GHICHU}}</textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
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
                    url: "{{URL::to('admin/doi-mat-khau')}}",
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