@extends('layout')
@section('rederbody')
@section('css')
  <link rel="stylesheet" href="{{asset('css/argon.css')}}" type="text/css"/>
@endsection
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="row align-items-center">
            <div class="col-8">
              <h3 class="mb-0">Thông tin</h3>
            </div>
            <div class="col-4 text-right">
              <a href="#!" class="btn btn-sm btn-primary">Sửa</a>
              <a href="#!" class="btn btn-sm btn-primary">Xóa</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <form>
            <h6 class="heading-small text-muted mb-4">Thông tin cá nhân</h6>
            <div class="pl-lg-4">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-username">Username</label>
                    <input type="text" id="input-username" class="form-control" placeholder="Username" value="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-email">Mail</label>
                    <input type="email" id="input-email" class="form-control" placeholder="Mail">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Họ và tên</label>
                    <input type="text" id="input-first-name" class="form-control" placeholder="Name" value="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Điện thoại</label>
                    <input type="tel" id="input-first-name" class="form-control" placeholder="Phone" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Ngày sinh</label>
                    <input type="date" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Giới tính</label>
                    <select class="form-control" style="margin-top:12px;">
                      <option>Nam</option>
                      <option>Nữ</option>
                      <option>Khác</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <a href="#!" class="btn btn-sm btn-primary">Đổi mật khẩu</a>
                    <input type="text" id="input-first-name" class="form-control" placeholder="" value="">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <label class="form-control-label" for="input-first-name">Facebook ID</label>
                    <input type="tel" id="input-first-name" class="form-control" placeholder="Phone" value="">
                  </div>
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
                    <input id="input-address" class="form-control" placeholder="Andress" value="" type="text">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-city">Tỉnh/ Thành phố</label><br/>
                    <select class="field-input" id="tinhThanh" name="MATINH">
                      <option data-code="null" value="null" selected="">
                          Chọn tỉnh / thành </option>   
        
                            <option value=""></option>
        							                
                  </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Quận/ Huyện</label><br/>
                    <select class="field-input" id="tinhThanh" name="MAQUAN_HUYEN">
                      <option data-code="null" value="null" selected="">
                          Chọn quận/ huyện </option>   
        
                            <option value=""></option>
        							                
                  </select>
                  </div>
                </div>
                <div class="col-lg-4">
                  <div class="form-group">
                    <label class="form-control-label" for="input-country">Xã/ Phường/ Thị trấn</label>
                    <select class="field-input" id="tinhThanh" name="MAPHUONG_XA">
                      <option data-code="null" value="null" selected="">
                          Chọn xã/ phường/ thị trấn </option>   
        
                            <option value=""></option>
        							                
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
                <textarea rows="4" class="form-control" placeholder=""></textarea>
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
<!-- Core -->
<script src="http://localhost:8000/templateAdmin/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Optional JS -->
<script src="http://localhost:8000/templateAdmin/assets/vendor/chart.js/dist/Chart.min.js"></script>
<script src="http://localhost:8000/templateAdmin/assets/vendor/chart.js/dist/Chart.extension.js"></script>
<!-- Argon JS -->
<script src="http://localhost:8000/templateAdmin/assets/js/argon.js?v=1.2.0"></script>
@endsection