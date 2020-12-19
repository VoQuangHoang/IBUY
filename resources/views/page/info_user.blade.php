@extends('layouts.master')
@section('maincontent')
<!-- Cart -->

<div class="cart_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart_container">
                    @if(session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}  
                        </div>
                    @endif
                    
                    <div class="cart_title">Tài khoản của tôi</div>

                    <div class="cart_items" style="background-color: aliceblue;padding: 15px;">
                        <div class="row">
                            <div class="col-md-5 order-md-1 mb-4">
                            <h4 class="mb-3 text-muted">Tài khoản của <span class="text-primary">{{Auth::user()->name}}</span></h4>
                                <hr class="mb-3">
                            <div class="card">
                                <img class="card-img-top" src="{{asset('public/uploads/user/'.Auth::user()->image)}}" alt="Card image cap" style="max-width:120px; display: block; margin-left: auto; margin-right: auto; padding: 10px 0; border-radius: 50%;">
                                
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Họ tên: {{Auth::user()->name}}</li>
                                    <li class="list-group-item">Số điện thoại: {{Auth::user()->phone}}</li>
                                    <li class="list-group-item">Email: {{Auth::user()->email}}</li>
                                    <li class="list-group-item">Giới tính: {{Auth::user()->gender}}</li>
                                    <li class="list-group-item">Địa chỉ: {{Auth::user()->address}}</li>
                                </ul>
                            </div>

                            </div>
                            <div class="col-md-7 order-md-2">
                                <h4 class="mb-3 text-muted">Cập nhật tài khoản</h4>
                                <hr class="mb-3">
                                @foreach ($edit_user as $user)
                                <form class="needs-validation" novalidate action="{{ URL::to('update_user/'.Auth::user()->id) }}"
                                    method="POST">
                                    {{ csrf_field() }}

                                    <div class="mb-3">
                                        <label for="firstName">Họ tên</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder=""
                                            value="{{Auth::user()->name}}" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập tên người dùng
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="">Giới tính</label>
                                        <select class="form-control" name="gender" id="" width="auto" style="width:auto !important;">
                                            <option value="{{Auth::user()->gender}}">{{Auth::user()->gender}}</option>
                                            @if(Auth::user()->gender == "Nam")
                                                <option value="Nữ">Nữ</option>
                                            @else
                                                <option value="Nam">Nam</option>
                                            @endif 
                                        </select>
                                    </div>

                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                            placeholder="you@example.com" value="{{Auth::user()->email}}" readonly>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập email
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="password">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            value="{{$user->password}}">
                                        <div class="invalid-feedback">
                                            Vui lòng nhập mật khẩu
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Địa chỉ</label>
                                        <input type="text" name="address" class="form-control" id="address"
                                            placeholder="1 Nguyễn Văn Linh" value="{{Auth::user()->address}}" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập địa chỉ
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="phone">Số điện thoại</label>
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="090 999 9999"
                                            value="{{Auth::user()->phone}}" required>
                                        <div class="invalid-feedback">
                                            Vui lòng nhập số điện thoại
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="image">Hình Ảnh</label><br />
                                        <input type="file" name="image" class="form-control" style="height:auto;" id="image" placeholder="Hình ảnh">
                                    </div>

                                    <hr class="mb-4">
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Cập nhật</button>
                                </form>
                                @endforeach
                            </div>
                        </div>
                        <!-- <hr class="mb-4">
                        <div class="cart_buttons" style="margin-top:0;margin-bottom: 10px;"> -->
                        <!-- <button type="button" class="button cart_button_clear">Clear</button> -->
                        <!-- <button href="" type="button" class="button cart_button_checkout">Đặt hàng</button>
                        </div> -->

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
