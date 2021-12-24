@extends('admin.layout')
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
                Họ tên<span class="font-weight-light"></span>
              </h5>
              <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>Điện thoại
              </div>
              <div class="h5 font-weight-300">
                <i class="ni location_pin mr-2"></i>Mail
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
                <a href="#!" class="btn btn-sm btn-primary">Chỉnh sửa</a>
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
                      <select class="form-control"  style="margin-top:0px;">
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
                      
                      <label class="form-control-label" for="input-first-name">Mật khẩu cũ</label>
                      <input type="password" id="input-first-name" class="form-control" placeholder="Password" value="">
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Mật khẩu mới</label>
                      <input type="password" id="input-first-name" class="form-control" placeholder="Password" value="">
                    </div>
                  </div>
                </div>
                <a href="#!" class="btn btn-sm btn-primary" style="margin-left:auto;margin-right:auto;display:block;margin-bottom:0%">Đổi mật khẩu</a>
                <div class="row">
                  <div class="col-md-12">
                    <label class="form-control-label" for="input-first-name">Facebook</label>
                    <input type="text" id="input-first-name" class="form-control" placeholder="Facebook ID" value="">
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
                      <select class="field-input form-control" id="tinhThanh" name="MATINH">
                        <option data-code="null" value="null" selected="">
                            Chọn tỉnh / thành </option>   
          
                              <option value=""></option>
                                        
                    </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Quận/ Huyện</label><br/>
                      <select class="field-input form-control" id="tinhThanh" name="MAQUAN_HUYEN">
                        <option data-code="null" value="null" selected="">
                            Chọn quận/ huyện </option>   
                              <option value=""></option>
                                        
                    </select>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="form-group">
                      <label class="form-control-label" for="input-country">Xã/ Phường/ Thị trấn</label>
                      <select class="field-input form-control" id="tinhThanh" name="MAPHUONG_XA">
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