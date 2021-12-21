@extends('admin.layout')
@section('css')

@endsection
@section('renderbody')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Sản phẩm</h3><a href="{{ URL::to('/admin/them-san-pham') }}">Thêm mới</a>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="status">Mã</th>
                                    <th scope="col" class="sort" data-sort="name">Sản phẩm</th>
                                    <th scope="col" class="sort" data-sort="budget">Giá</th>
                                    <th scope="col">Giá khuyến mãi</th>
                                    <th scope="col" class="sort" data-sort="completion">Thương hiệu</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
								@foreach ($sanPham as $sp)
								<tr>
                                    <td class="budget">
                                        {{$sp->id}}
                                    </td>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <a href="#" class="avatar rounded-circle mr-3">
                                                <img alt="Image placeholder" src="{{asset($sp->HinhAnh()->URL)}}">
                                            </a>
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{$sp->TENSP}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{$sp->GIABAN}} vnd
                                    </td>
                                    <td class="budget">
                                        {{$sp->GIAMGIA}} vnd
                                    </td>
                                    <td class="budget">
                                        {{$sp->ThuongHieu()->TENTHUONGHIEU}}
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="{{URL::to("/admin/sua-san-pham/$sp->id")}}">Sửa</a>
                                                <a class="dropdown-item" href="#">Xóa</a>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
								@endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        {{$sanPham->links()}}
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
