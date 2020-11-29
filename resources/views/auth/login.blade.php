<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Đăng Nhập</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/backend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/backend/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Chào Mừng Quý Khách</h1>
                  </div>
                  <form class="user" action="{{ route('login') }}" method="post">{{csrf_field()}}
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nhập tên tài khoản...">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="remenber" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Nhớ Mật Khẩu</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit"> Đăng Nhập</button>
                  </form>
                  <hr>
                  <div class="text-center">
                    @if (Route::has('register'))
                    <a class="small" href="{{ route('register') }}">Tạo một tài khoản!</a>                
                    @endif        
                  </div>
                  <div class="text-center">
                    <br>
                <div class="small text-gray-900 mb-4"><a href="{{URL::to('')}}"><i class="fas fa-chevron-circle-right"></i> QUAY LẠI TRANG CHỦ</a></div>
              </div>
                </div>
              </div>
              <div class="col-lg-6">
                  <img src="{{('public/backend/img/banner-admin1.jpg')}}" style="max-height: 100%; max-width: 80%; position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin: auto;">
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/backend/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
