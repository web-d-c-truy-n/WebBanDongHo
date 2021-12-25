@extends('admin.layout')
@section('link')
    
    <li class="breadcrumb-item active" aria-current="page">Khách hàng</li>
@endsection
@section('css')

@endsection
@section('active_khachHang','active')
@section('renderbody')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Thành viên</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Họ tên</th>
                                    <th scope="col" class="sort" data-sort="budget">Tên người dùng</th>
                                    <th scope="col" class="sort" data-sort="status">Email</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col" class="sort" data-sort="completion">Vai trò</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
								@foreach ($users as $user)
								<tr>
                                    <th scope="row">
                                        <div class="media align-items-center">                                            
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{$user->HOTEN}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{$user->name}}
                                    </td>
                                    <td class="budget">
                                        {{$user->email}}
                                    </td>
                                    <td class="budget">
                                        {{$user->diaChi()}}
                                    </td>
                                    <td class="budget">
                                        {{$user->VAITRO}}
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
											<form method="POST" action="{{URL::to("admin/xoa-tk")}}">
												@csrf
												<input type="hidden" value="{{$user->id}}" name="id"/>
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">                                                
													<a class="dropdown-item" href="#" onclick="this.parentNode.parentNode.submit()">Xóa</a>
												</div>
											</form>                                            
                                        </div>
                                    </td>
                                </tr>
								@endforeach
                               

                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                       {{$users->links()}}
						{{-- <nav aria-label="...">
                            <ul class="pagination justify-content-end mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">
                                        <i class="fas fa-angle-left"></i>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <i class="fas fa-angle-right"></i>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav> --}}
                    </div>
                </div>
            </div>
        </div>
    @endsection
