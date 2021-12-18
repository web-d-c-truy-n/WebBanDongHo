@extends('admin.layout')
@section('css')
    <link rel="stylesheet" href="{{ asset('trumbowyg/dist/ui/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/fonts/themify-icons-font/themify-icons/themify-icons.css') }}">
    <style>
        /* Modal Buy Tickets */
        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.4);
            align-items: center;
            justify-content: center;
            display: none;
        }

        .modal-container {
            background-color: #fff;
            width: 990px;
            max-width: calc(100%-32px);
            min-height: 200px;
            position: relative;

        }

        .modal-header {
            background: #009688;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            color: #fff;
        }

        .modal-heading-icon {
            margin-right: 16px;
        }

        .modal-close {
            position: absolute;
            right: 0;
            top: 0;
            color: #fff;
            padding: 12px;
            cursor: pointer;
            opacity: 1;
        }

        .modal-close:hover {
            opacity: 1;
            background-color: #ccc;
        }

        .modal-label {
            display: block;
            font-size: 15px;
            margin-bottom: 12px;
        }

        .modal-input {
            border: 1px solid #ccc;
            width: 100%;
            padding: 10px;
            font-size: 15px;
            margin-bottom: 24px;
        }

        .modal-body {
            padding: 16px;
        }

        #buy-tickets {
            background: #009688;
            border: none;
            color: #fff;
            font-size: 15px;
            text-transform: uppercase;
            width: 100%;
            padding: 18px;
            cursor: pointer;
        }

        #buy-tickets:hover {
            opacity: 0.9;
        }

        .modal-footer {
            padding: 16px;
            text-align: right;

        }

        .modal-footer a {
            color: #2196F3;
        }

        .modal.open {
            display: flex;
        }

        .modal-body img {
            width: 24%;
        }

        .anhBia {
            width: 100%;
        }

        .album {
            width: 25%;
        }
        .btn5-hover {
  width: 160px;
  font-size: 16px;
  font-weight: 600;
  color: #fff;
  cursor: pointer;
  margin: 20px;
  height: 55px;
  text-align:center;
  border: none;
  background-size: 300% 100%;
  border-radius: 50px;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.btn5-hover:hover {
  background-position: 100% 0;
  moz-transition: all .4s ease-in-out;
  -o-transition: all .4s ease-in-out;
  -webkit-transition: all .4s ease-in-out;
  transition: all .4s ease-in-out;
}

.btn5-hover:focus {
  outline: none;
}

.btn5-hover.btn5 {
    background-image: linear-gradient(
      to right,
      #25aae1,
      #4481eb,
      #04befe,
      #3f86ed
    );
    box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
  }
    </style>
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
                                <h2>Ảnh bài viết</h2>
                                <div id="anhDeODay"></div>
                                <button class="btn5-hover btn5 place-buy-btn js-buy-ticket"onclick="clickAnh = 1">Thêm ảnh</Button>
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
                                <h3 class="mb-0">Thêm bài viết</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="#!" class="btn btn-sm btn-primary" id="dang">Đăng</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form id="themSanPham">
                            <h6 class="heading-small text-muted mb-4">Thông tin bài viết</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-name">Tên bài viết</label>
                                            <input type="text" id="input-username" class="form-control" name="TENSP"
                                                placeholder="Tên sản phẩm">
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label" for="input-first-name">Người đăng</label>
                                            <input type="text" id="input-first-name" class="form-control"
                                                placeholder="Giá bán" name="GIABAN">
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
                                    <textarea rows="4" class="form-control"
                                        placeholder="Mô tả ngắn gọn về sản phẩm trong khoảng 225 từ " name="NDTOMTAT"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="from-control-label">Nội dung</label>
                                    <div>
                                        <textarea id="editor" name="NOIDUNG"></textarea>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tickets -->
    <div class="clear"></div>
    <div class="modal js-modal">
        <div class="modal-container">
            <div class="modal-close js-modal-close">
                <i class="ti-close"></i>
            </div>
            <header class="modal-header">
                <i class="ti-bag modal-heading-icon"></i>
                Thêm sản phẩm
            </header>
            <div class="modal-body">
                <div style="height: 300px; overflow: scroll;" id="chenAnh">
                   {{--  @foreach ($hinhAnh as $hinh)
                        <img class="anh" id_anh="{{ $hinh->id }}" src="{{ asset($hinh->URL) }}" />
                    @endforeach --}}
                </div>
            </div>
            <footer class="modal-footer">
               {{--  <input type="file" onchange="base64(this,callBack)" /> --}}
            </footer>
        </div>
    </div>
    <script>
        const buyBtns = document.querySelectorAll('.js-buy-ticket')
        const modal = document.querySelector('.js-modal')
        const modalClose = document.querySelector('.js-modal-close')
        //Hàm hiển thị
        function showBuyTickets() {
            modal.classList.add('open')
        }

        function hideBuyTickets() {
            modal.classList.remove('open')
        }
        for (const buyBtn of buyBtns) {
            buyBtn.addEventListener('click', showBuyTickets)
        }
        modalClose.addEventListener('click', hideBuyTickets)
    </script>
@endsection

@section('js')
    <script src="{{ asset('trumbowyg/dist/trumbowyg.min.js') }}"></script>
    <script>
        $('#editor').trumbowyg();
    </script>
@endsection
