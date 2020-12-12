@extends('layouts.auth')
@section('auth_content')
<div class="row">
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Quên mật khẩu</h1>
              </div>
              <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email">Tên Email tài khoản</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <button class="btn btn-primary btn-block" type="submit">Lấy mật khẩu</button>
                    </form>
                </div>
              <br>
              <div class="text-center">
                <div class="small text-gray-900 mb-4">Bạn đã có tài khoản. Quay lại trang <a href="{{URL::to('login')}}">Đăng nhập</a></div>
              </div>
              <div class="text-center">
                <div class="small text-gray-900 mb-4"><a href="{{URL::to('')}}"><i class="fas fa-chevron-circle-left"></i> Quay lại trang chủ</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
                  <img src="{{URL::to('public/backend/img/banner-admin1.jpg')}}" width="100%" style="max-height: 100%; max-width: 80%; position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto;">
              </div>
        </div>
@endsection