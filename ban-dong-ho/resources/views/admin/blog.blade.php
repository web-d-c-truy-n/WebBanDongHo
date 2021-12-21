@extends('admin.layout')
@section('renderbody')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Bài viết</h3><a href="{{ URL::to('/admin/them-bai-viet') }}">Thêm mới</a>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Tên bài viết</th>
                                    <th scope="col" class="sort" data-sort="name">Hình đại diện</th>
                                    <th scope="col" class="sort" data-sort="name">Nội dung tóm tắt</th>
                                    <th scope="col" class="sort" data-sort="name">Ngày đăng</th>
                                    <th scope="col" class="sort" data-sort="name">Người đăng</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
								@foreach ($baiViet as $bv)
								<tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{$bv->TENBAIVIET}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="{{$bv->HinhAnh()->URL}}">
                                        </a>
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4">
                                            <p>{{$bv->NOIDUNGTOMTAT}}</p>
                                        </span>
                                    </td>
                                    <td>
                                        <p>{{$bv->created_at}}</p>
                                    </td>
                                    <td>
                                        <p>{{$bv->User()->HOTEN}}</p>
                                    </td>
                                    <td class="text-right">
										<div class="dropdown">
											<a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="fas fa-ellipsis-v"></i>
											</a>
											<form action="{{URL::to('admin/xoa-bai-viet')}}" method="POST">
												<input type="hidden" value="{{$bv->id}}" name="id"/>
												@csrf
												<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">													
													<a class="dropdown-item" href="{{URL::to("admin/sua-bai-viet/$bv->id")}}">Sửa</a>
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
                        {{$baiViet->links()}}
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

    </div>
@endsection
