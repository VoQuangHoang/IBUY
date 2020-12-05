@extends('layouts.auth')
@section('auth_content')
<!-- Nested Row within Card Body -->
<div class="row">
    <div class="col-lg-6">
        <div class="p-5">
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Chào Mừng Quý Khách</h1>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="user" action="{{ route('login') }}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail"
                        aria-describedby="emailHelp" placeholder="Nhập tên tài khoản...">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control form-control-user"
                        id="exampleInputPassword" placeholder="Mật khẩu">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="remenber" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Nhớ Mật
                            Khẩu</label>
                    </div>
                </div>
                <button class="btn btn-primary btn-user btn-block" type="submit"> Đăng
                    Nhập</button>
            </form>
            <hr>

            <div class="text-center">
                <a class="small"></a>
                @if (Route::has('register'))
                <a class="small" href="{{ route('register') }}">Tạo một tài khoản!</a>
                @endif
            </div>
            <div class="text-center">
                <br>
                <div class="small text-gray-900 mb-4"><a href="{{URL::to('')}}"><i
                            class="fas fa-chevron-circle-right"></i> QUAY LẠI TRANG CHỦ</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 d-none d-lg-block">
        <img src="{{('public/backend/img/banner-admin1.jpg')}}"
            style="max-height: 100%; max-width: 60%; position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto;">
    </div>
</div>
@endsection