@extends('admin.layoutlogin')
@section('renderbody')
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7" id="start">
                <div class="card bg-secondary border-0 mb-0">                    
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Chào mừng bạn đến với website PT</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="{{URL::to("install/dang-ky-admin")}}" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img
                                        src="{{ asset('templateAdmin/assets/img/icons/common/pngtree-start-button-rounded-futuristic-hologram-png-image_2257337.jpg') }}"></span>
                                <span class="btn-inner--text">Bắt đầu một trang web mới</span>
                            </a>
                            <a href="#!" class="btn btn-neutral btn-icon" id="phucHoi">
                                <span class="btn-inner--icon"><img
                                        src="{{ asset('templateAdmin/assets/img/icons/common/unnamed.png') }}"></span>
                                <span class="btn-inner--text">Phục hồi dữ liệu web</span>
                            </a>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <form method="POST" action="{{URL::to("install/restore")}}" hidden id="form_backup" enctype="multipart/form-data">
        @csrf
        <input type="file" name="backup" onchange="this.parentNode.submit()">
    </form>
@endsection
@section('js')
    <script>
        $("#phucHoi").click(function (e) { 
            $("#form_backup").find("input[type=file]").click();            
        });
    </script>
    @if (Session::has('backup'))
    <script>
        alert("{{Session::pull('backup')}}")
    </script>
    @endif
@endsection