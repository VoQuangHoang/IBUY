@extends('layouts.auth')
@section('auth_content')
<div class="row">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Đăng Nhập</h1>
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
                                    <form class="user" action="{{ route('login') }}" method="post">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="form-control form-control-user @error('email') is-invalid @enderror" id="email"
                                                placeholder="Nhập email...">
                                                @error('email')
                                            <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Mật khẩu</label>
                                            <input type="password" name="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Mật khẩu">
                                                @error('password')
                                            <div class="badge badge-danger" style="width:100%">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" name="remenber" class="custom-control-input"
                                                    id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Nhớ Mật
                                                    Khẩu</label>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block" type="submit"> Đăng
                                            Nhập</button>
                                    </form>
                                    <hr>

                                    <div class="text-center">
                                        @if (Route::has('password.request'))
                                          <a class="btn btn-link" href="{{ route('password.request') }}">Quên mật khẩu ?</a>
                                        @endif
                                        @if (Route::has('register'))
                                         <a class="btn btn-link" href="{{ route('register') }}">Tạo một tài khoản!</a>@endif        
                                    </div>
                                    <div class="text-center">
                                        <br>
                                        <div class="small text-gray-900 mb-4"><a href="{{URL::to('')}}"><i
                                                    class="fas fa-chevron-circle-left"></i> Quay lại trang chủ</a>
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