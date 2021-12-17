@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('trumbowyg/dist/ui/trumbowyg.min.css') }}">
@endsection
@section('renderbody')
    <div class="container-fluid mt--6">
    <div class="row">
      <div class="col-xl-4 order-xl-2">
        <div class="card card-profile">
          <div class="row justify-content-center">
            <div class="col-lg-3 order-lg-2">
              <div class="card-profile-image"> 
              </div>
            </div>
          </div>
          <div class="card-body pt-0">
            <div class="row">
              <div class="col">
                  <h2>Ảnh sản phẩm</h2>
                <input id="file-upload" type="file"/>
              </div>
            </div>
            <div class="row">
              <div class="col">
                  <h2>Album ảnh sản phẩm</h2>
                <input id="file-upload" type="file"/>
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
                <h3 class="mb-0">Thêm sản phẩm</h3>
              </div>
              <div class="col-4 text-right">
                <a href="#!" class="btn btn-sm btn-primary">Đăng</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form>
              <h6 class="heading-small text-muted mb-4">Thông tin sản phẩm</h6>
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-name">Tên sản phẩm</label>
                      <input type="text" id="input-username" class="form-control" placeholder="Name" >
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-donvitinh">Đơn vị tính</label>
                      <input type="email" id="input-email" class="form-control" placeholder="Đơn vị tính">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-first-name">Giá bán</label>
                      <input type="text" id="input-first-name" class="form-control" placeholder="Price" >
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="form-group">
                      <label class="form-control-label" for="input-last-name">Giá khuyến mãi</label>
                      <input type="text" id="input-last-name" class="form-control" placeholder="Price" >
                    </div>
                  </div>
                </div>
              </div>
              <hr class="my-4">         
              <div class="pl-lg-4">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group">
                      <div class="form-group">
                        <h2>Thương hiệu</h2>
                        <select class="form-control">
                          <option>Casio</option>
                          <option>Seiko</option>
                          <option>SR</option>
                          
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <button type="button" class="btn btn-danger">Link</button>
                        </div>
                        <input type="text" class="form-control" placeholder="Đường dẫn">
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
              </div>
              <hr class="my-4">
              <!-- Description -->
              <h6 class="heading-small text-muted mb-4">Mô tả</h6>
              <div class="pl-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Tóm tắt</label>
                  <textarea rows="4" class="form-control" placeholder="A few words about your product..."></textarea>
                </div>
                <div class="form-group">
                  <label class="from-control-label">Nội dung</label>
                  <div>
                    <textarea id="editor"></textarea>
                  </div>
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
<script src="{{ asset('trumbowyg/dist/trumbowyg.min.js')}}"></script>
<script>
    $('#editor').trumbowyg();
    $('#noidungTomTat').trumbowyg();
</script>
@endsection