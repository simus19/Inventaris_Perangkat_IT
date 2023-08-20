<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content=""> 

  <title>INVENTARIS PERANGKAT IT</title>

  <!-- Custom fonts for this template-->
  <link href="{{ url('') }}/public/admin-assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('') }}/public/admin-assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-primary" {{-- style="height: 100vh; background-repeat: no-repeat; background-size: cover; background-image: url({{ url('public/admin-assets/img/bg-log.png') }}); --}}">

  <div class="container" style="height: 100vh;">

    <!-- Outer Row -->
    <div class="row h-100 justify-content-center align-items-center">

      <div class="col-xl-7 col-lg-12 col-md-9">
        @include('layouts.admin.alert')
        <div class="card o-hidden border-0 shadow-lg ">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 font-weight-bold" style=" font-family: 'Times New Roman', Times, serif;">INVENTARIS PERANGKAT IT <br> PLN UIW ACEH</h1>
                  </div>
                  <!-- Session Status -->
                  

                  <!-- Validation Errors -->
                  
                  <form class="user" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" name="username" id="username" placeholder="Masukkan Username . . .">
                      <small class="text-danger">{{ $errors->first('username') }}</small>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="password" id="exampleInputPassword" placeholder="Password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                    <hr>
                  </form>
                  <p class="mt-2 text-center">Belum punya akun? <a style="text-decoration: underline" href="{{ url('register') }}">Daftar</a></p>
                  
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('') }}/public/admin-assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{ url('') }}/public/admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('') }}/public/admin-assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('') }}/public/admin-assets/js/sb-admin-2.min.js"></script>

</body>

</html>

