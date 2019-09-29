<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=$header['title']?> - Aplikasi Absensi Siswa</title>

  <link href="<?=base_url('/assets/fontawesome-free/css/all.min.css');?>" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="<?=base_url('/assets/vendor/bootstrap/css/bootstrap.min.css');?>" >
  <link rel="stylesheet" href="<?=base_url('/assets/vendor/bootstrap/css/sb-admin-2.min.css');?>" >

</head>

<body class="bg-gradient-info">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-5 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
              <div class="col-lg-12">
                  
                <div class="p-5">
                  <div class="text-center mb-1">
                    <img src="<?=base_url('/images/logo-sawunggalih.jpg');?>" alt="" width="72" height="72">
                  </div>
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat Datang!</h1>
                  </div>
                  <?php
                    // Cek cookie
                    if(isset($data['session']['error_login'])){ // Jika ada
                      echo '<p class="text-white text-center bg-danger mt-1">'.$data['session']['error_login'].'</p>';
                    }
                  ?>
                  <form class="user" method="post" action="<?=base_url('/absensi/ceklogin');?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="login_user" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name='login_pass' id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?=base_url('/assets/vendor/jquery/jquery.min.js');?>"></script>
  <script src="<?=base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js');?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?=base_url('/assets/vendor/jquery-easing/jquery.easing.min.js');?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?=base_url('/assets/vendor/bootstrap/js/sb-admin-2.min.js');?>"></script>

</body>

</html>
