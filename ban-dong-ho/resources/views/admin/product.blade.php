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
            <h3 class="mb-0">Sản phẩm</h3><a href="{{URL::to('/admin/them-san-pham')}}">Thêm mới</a>
          </div>
          <!-- Light table -->
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th scope="col" class="sort" data-sort="name">Sản phẩm</th>
                  <th scope="col" class="sort" data-sort="budget">Giá</th>
                  <th scope="col" class="sort" data-sort="status">Mã</th>
                  <th scope="col">Từ khóa</th>
                  <th scope="col" class="sort" data-sort="completion">Danh mục</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Argon Design System</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $2500 USD
                  </td>
                  <td class="budget">
                    Mã sản phẩm
                  </td>
                  <td class="budget">
                    Từ khóa
                  </td>
                  <td class="budget">
                    Danh mục
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Sửa</a>
                        <a class="dropdown-item" href="#">Xóa</a>
                       
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $1800 USD
                  </td>
                  <td class="budget">
                    Mã sản phẩm
                  </td>
                  <td class="budget">
                    Từ khóa
                  </td>
                  <td class="budget">
                    Danh mục
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Sửa</a>
                        <a class="dropdown-item" href="#">Xóa</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../assets/img/theme/sketch.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Black Dashboard</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $3150 USD
                  </td>
                  <td class="budget">
                    Mã sản phẩm
                  </td>
                  <td class="budget">
                    Từ khóa
                  </td>
                  <td class="budget">
                    Danh mục
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Sửa</a>
                        <a class="dropdown-item" href="#">Xóa</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../assets/img/theme/react.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">React Material Dashboard</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $4400 USD
                  </td>
                  <td class="budget">
                    Mã sản phẩm
                  </td>
                  <td class="budget">
                    Từ khóa
                  </td>
                  <td class="budget">
                    Danh mục
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Sửa</a>
                        <a class="dropdown-item" href="#">Xóa</a>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="media align-items-center">
                      <a href="#" class="avatar rounded-circle mr-3">
                        <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                      </a>
                      <div class="media-body">
                        <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                      </div>
                    </div>
                  </th>
                  <td class="budget">
                    $2200 USD
                  </td>
                  <td class="budget">
                    Mã sản phẩm
                  </td>
                  <td class="budget">
                    Từ khóa
                  </td>
                  <td class="budget">
                    Danh mục
                  </td>
                  <td class="text-right">
                    <div class="dropdown">
                      <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <a class="dropdown-item" href="#">Sửa</a>
                        <a class="dropdown-item" href="#">Xóa</a>
                      </div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- Card footer -->
          <div class="card-footer py-4">
            <nav aria-label="...">
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
            </nav>
          </div>
        </div>
      </div>
    </div>
@endsection