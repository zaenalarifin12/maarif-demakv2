<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{ asset("assets/vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ asset("assets/css/sb-admin-2.min.css")}}" rel="stylesheet">

  <script src="{{ asset("assets/vendor/jquery/jquery.js")}}"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>

  <style>
    .bg-green{
      background-color: #17A673 !important;
      background-image: none;
    }
  </style>

</head>

<body class="bg-gradient-primary bg-green" >

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="{{ asset("assets/img/side_siswa.png") }}" class="mx auto" alt="" srcset="">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    
                    <img src="{{ asset("assets/img/up_siswa.png") }}" width="auto" height="30" class="mb-3" alt="" srcset="">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                    <h2 class="h6 text-gray-900 mb-4">Silahkan Login Dengan Akun siswa</h2>

                    @if (!empty(session("status")))
                      <div class="row justify-content-center">
                          <div class="col-12">
                              <div class="alert alert-warning alert-notif" role="alert">
                              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <strong> {{session("status")}} </strong>
                          </div>
                          </div>
                      </div>
                    @endif
                    
                  </div>
                  @include('component.all-error');
                  <form class="user" action="{{ url("/loginSiswa") }}" method="POST">
                      @csrf
                    <div class="form-group">
                      <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="{{ old("email") }} ">
                      @include('component.error', ["name" => "email"])
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                      @include('component.error', ["name" => "password"])
                    </div>
                    <button type="submit" class="btn btn-success btn-user btn-block">Masuk</button>
                  </form>
                  {{-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div> --}}
                  {{-- <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> --}}
                  <div class="text-center my-3">
                    <span>Belum Punya Akun ? </span>
                    <a class="text-success" href="{{ url("/register") }}">Daftar</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset("assets/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset("assets/vendor/jquery-easing/jquery.easing.min.js")}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset("assets/js/sb-admin-2.min.js")}}"></script>

  
    @if(session()->has('info'))
        <script>
    
            swal({
                    title : "Informasi !!", 
                    text: "{{ session('info') }}", 
                    type: "info",
                    timer: 3000,
                }
                );
        </script>
    @endif

</body>

</html>

