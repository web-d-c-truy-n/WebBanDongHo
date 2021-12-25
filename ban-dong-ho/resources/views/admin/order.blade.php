@extends('admin.layout')
@section('link')
    
    <li class="breadcrumb-item active" aria-current="page">Đơn hàng</li>
@endsection
@section('active_donHang','active')
@section('renderbody')
    <div class="container-fluid mt--6">
        <div class="row">
            <div class="col">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="mb-0">Đơn hàng</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">Khách hàng</th>
                                    <th scope="col" class="sort" data-sort="budget">Tổng tiền</th>
                                    <th scope="col" class="sort" data-sort="status">Tình trạng</th>
                                    <th scope="col">Ngày</th>
                                    <th scope="col" class="sort" data-sort="completion">Địa chỉ</th>
                                    <th scope="col" class="sort" data-sort="completion">Ghi chú</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
								@foreach ($donHang as $dh)
								<tr>
                                    <th scope="row">
                                        <div class="media align-items-center">                                            
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{$dh->User()->HOTEN}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{$dh->TongCong()}} vnd
                                    </td>
                                    <td>
                                        <span class="badge badge-dot mr-4" trangThai="{{$dh->id}}">
                                            <span class="status">{{$dh->TRANGTHAI}}</span>
                                        </span>
                                    </td>
                                    <td>
                                        {{$dh->created_at}}
                                    </td>
                                    <td>
                                        {{$dh->DIACHIGIAOHANG}}
                                    </td>
                                    <td>
                                        {{$dh->GHICHU}}
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                <a class="dropdown-item" href="#" onclick="capNhatTrangThai('Đang xử lý',{{$dh->id}})">Đang xử lý</a>
                                                <a class="dropdown-item" href="#" onclick="capNhatTrangThai('Đang vận chuyển',{{$dh->id}})">Đang vận chuyển</a>
                                                <a class="dropdown-item" href="#" onclick="capNhatTrangThai('Hoàn tất',{{$dh->id}})">Hoàn tất</a>
												<a class="dropdown-item" href="{{URL::to("admin/chi-tiet-hoa-don/$dh->id")}}">Xem chi tiết</a>
                                                <a class="dropdown-item" href="#" onclick="capNhatTrangThai('Hủy',{{$dh->id}})">Hủy</a>
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
                       {{$donHang->links()}}
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
@section("js")
    <script>
        function capNhatTrangThai(trangThai,id){
            $.ajax({
                type: "POST",
                url: "{{URL::to('admin/doi-trang-thai')}}",
                data: {trangThai: trangThai,id:id, _token:"{{ csrf_token() }}"},
                dataType: "json",
                success: function (rs) {
                    if(rs){
                        $("[trangThai="+id+"]").text(trangThai)
                    }
                }
            });
        }
    </script>
@endsection 