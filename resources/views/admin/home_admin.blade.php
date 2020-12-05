@extends('layouts.admin')
@section('admin_content')
<div class="row" style="margin-bottom: 320px">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xxs font-weight-bold text-primary text-uppercase mb-1">Tài Khoản</div>
                      <span class="badge badge-pill badge-primary" style="font-size: medium;"><?php echo count($user)?></span>
                    </div>
                    <div class="col-auto">
                    	<a href="{{('all_admin')}}"><i class="fa fa-user-circle fa-3x text-gray-600"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xxs font-weight-bold text-warning text-uppercase mb-1">Sản Phẩm</div>
                      <span class="badge badge-pill badge-warning" style="font-size: medium;"><?php echo count($product)?></span>
                    </div>
                    <div class="col-auto">
                    	<a href="{{('all_product')}}"><i class="fa fa-mobile fa-3x text-gray-600"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xxs font-weight-bold text-danger text-uppercase mb-1">Thương Hiệu</div>
                      <span class="badge badge-pill badge-danger" style="font-size: medium;"><?php echo count($category)?></span>
                    </div>
                    <div class="col-auto">
                    	<a href="{{('all_category')}}"><i class="fa fa-life-ring fa-3x text-gray-600"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xxs font-weight-bold text-success text-uppercase mb-1">Đơn Hàng</div>
                      <span class="badge badge-pill badge-success" style="font-size: medium;"><?php echo count($order)?></span>
                    </div>
                    <div class="col-auto">
                    	<a href="{{('all_order')}}"><i class="fas fa-people-carry fa-3x text-gray-600"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xxs font-weight-bold text-info text-uppercase mb-1">Liên Hệ</div>
                      <span class="badge badge-pill badge-info" style="font-size: medium;"><?php echo count($contact)?></span>
                    </div>
                    <div class="col-auto">
                    	<a href="{{('all_contact')}}"><i class="fas fa-address-book fa-3x text-gray-600"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-dark shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xxs font-weight-bold text-dark text-uppercase mb-1">Bình Luận</div>
                      <span class="badge badge-pill badge-dark" style="font-size: medium;"><?php echo count($comment)?></span>
                    </div>
                    <div class="col-auto">
                    	<a href="{{('all_comment')}}"><i class="fas fa-comment-alt fa-3x text-gray-600"></i></a>
                    </div>
                  </div>
                </div>
              </div>
          </div>
@endsection