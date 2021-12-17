@extends('admin.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('trumbowyg/dist/ui/trumbowyg.min.css') }}">
<style>
    
</style>
@endsection
@section('renderbody')
<div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header border-0">
          <h3 class="mb-0">Thêm mới sản phẩm</h3><a href="#">Lưu</a>
        </div> 
        <h2>Tên sản phẩm</h2>
        <input type="text" placeholder="Tên sản phẩm"/>
        <h2>Giá bán</h2>
        <input type="text" placeholder="Giá"/>
        <h2>Giá khuyến mãi</h2>
        <input type="text" placeholder="Giá khuyến mãi"/>
        <h2>Thương hiệu</h2>
        <input type="text" placeholder="Thương hiệu"/>
        <h2>Đường dẫn</h2>
        <input type="text" placeholder="Đường dẫn"/>
        <h2>Đơn vị tính</h2>
        <input type="text" placeholder="Đơn vị tính"/>
        <h2>Ảnh sản phẩm</h2>
        <a href="#">Thêm ảnh</a>
        <h2>Album ảnh sản phẩm</h2>
        <a href="#">Thêm ảnh</a>
        <div>
            <textarea id="editor"></textarea>
        </div>
        <div>
            <textarea id="noidungTomTat"></textarea>
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