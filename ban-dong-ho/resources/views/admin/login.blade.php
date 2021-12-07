@extends('admin.layoutlogin')
@section('css')
@endsection
@section('js')
@endsection
@section('renderbody')
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3"><small>Đăng nhập với</small></div>
                        <div class="btn-wrapper text-center">
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img
                                        src="{{ asset('templateAdmin/assets/img/icons/common/github.svg') }}"></span>
                                <span class="btn-inner--text">Github</span>
                            </a>
                            <a href="#" class="btn btn-neutral btn-icon">
                                <span class="btn-inner--icon"><img
                                        src="{{ asset('templateAdmin/assets/img/icons/common/google.svg') }}"></span>
                                <span class="btn-inner--text">Google</span>
                            </a>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Hoặc đăng nhập bằng thông tin đăng nhập</small>
                        </div>
                        <form role="form" method="post" action="{{ URL::to('admin/admin_login') }}">
                            @csrf
                            <div class="form-group mb-3">
                                @if ($errors->any())
                                    <span style="color: red">{{ $errors->first() }}</span>
                                @endif
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Tên đăng nhập" type="text" name="username">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group-merge input-group-alternative">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                    </div>
                                    <input class="form-control" placeholder="Mật khẩu" type="password" name="password">
                                </div>
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-muted">Lưu mật khẩu</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Đăng nhập</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="#" class="text-light"><small>Quên mật khẩu</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="#" class="text-light"><small>Tạo tài khoản mới</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
