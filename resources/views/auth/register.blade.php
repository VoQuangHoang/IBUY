@extends('layouts.auth')
@section('auth_content')
<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-7">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Tạo một tài khoản!</h1>
            </div>
            <!-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif -->
            <form class="user" action="{{ route('register') }}" method="post" class="form-horizontal style-form"
                enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="form-control form-control-user @error('name') is-invalid @enderror" id="name"
                        placeholder="Nhập tên của bạn...">
                    @error('name')
                    <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                        placeholder="Nhập email...">
                    @error('email')
                    <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="phone" name="phone" value="{{ old('phone') }}"
                        class="form-control form-control-user @error('phone') is-invalid @enderror" id="phone"
                        placeholder="Nhập Số Điện Thoại...">
                    @error('phone')
                    <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" name="address" value="{{ old('address') }}"
                        class="form-control form-control-user @error('address') is-invalid @enderror" id="address"
                        placeholder="Nhập địa chỉ...">
                    @error('address')
                    <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password" type="password"
                        class="form-control form-control-user @error('password') is-invalid @enderror" name="password"
                        autocomplete="new-password" value="{{ old('password') }}" placeholder="Nhập mật Khẩu...">
                    @error('password')
                    <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input id="password_confirmation" type="password"
                        class="form-control form-control-user @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" autocomplete="new-password"
                        value="{{ old('password_confirmation') }}" placeholder="Nhập lại mật Khẩu...">
                    @error('password_confirmation')
                    <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="gender">Giới tính</label>
                    <select class="form-control" name="gender" id="gender">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                    </select>
                </div>
                <div class="form-group mb-4">
                    <label for="exampleFormControlFile1">Hình Ảnh</label><br>
                    <input type="file" class="form-control" style="height:auto" name="image" id="formGroupExampleInput"
                        placeholder="Thêm tên danh mục">
                        @error('image')
                                            <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                                            @enderror
                </div>
                <button class="btn btn-primary btn-block mb-4" type="submit"> Đăng
                    Ký</button>
            </form>
            <br>
            <div class="text-center">
                <div class=" text-gray-900 mb-4">Bạn đã có tài khoản! Quay lại trang <a
                        href="{{URL::to('login')}}">Đăng Nhập</a></div>
            </div>
            <div class="text-center">
                <div class=" text-gray-900 mb-4"><a href="{{URL::to('')}}"><i
                            class="fas fa-chevron-circle-left"></i> Quay lại trang chủ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <img src="{{('public/backend/img/banner-admin1.jpg')}}" width="100%"
            style="max-height: 100%; max-width: 80%; position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto;">
    </div>
</div>
@endsection
