<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aplikasi Perizinan praktek dokter</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('admin/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('admin/css/shared/style.css')}}">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{asset('admin/css/demo_1/style.css')}}">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="{{asset('admin/images/favicon.ico')}}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-6 mx-auto">
            <div class="auto-form-wrapper">
              <div class="text-center">
                <img src="{{asset('pemkab.png')}}" alt="" width="50px">
                <h4 class="mt-2">Register User</h4>
              </div>
              <form action="{{Route('auth.store')}}" method="POST">
                @csrf
                <br>
                <input type="hidden" name="role" value="7" id="">
                <div class="form-group">
                  <label for="">NIP/No KTP</label>
                  <div class="input-group">
                    <input type="text" name="NIP" class="form-control" placeholder="NIP">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Nama</label>
                  <div class="input-group">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md">
                    <div class="form-group">
                      <label for="">Tempat Lahir</label>
                      <div class="input-group">
                        <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="mdi mdi-check-circle-outline"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-group">
                      <label for="">Tanggal Lahir</label>
                      <div class="input-group">
                        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal lahir">
                        <div class="input-group-append">
                          <span class="input-group-text">
                            <i class="mdi mdi-check-circle-outline"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <label class="form-label">Jenis Kelamin</label> <br>
                <div class="form-group row">
                  <div class="col-md">
                    <div class="form-radio">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="membershipRadios1"
                          value="1" checked> Laki - laki </label>
                    </div>
                  </div>
                  <div class="col-md">
                    <div class="form-radio">
                      <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="membershipRadios2"
                          value="2"> Perempuan </label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <textarea name="alamat" id="" class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <div class="input-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="">Password</label>
                  <div class="input-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Sudah punya akun ?</span>
                  <a href="{{Route('auth.login')}}" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('admin/vendors/js/vendor.bundle.addons.js')}}"></script>
  <script src="{{asset('admin/js/shared/off-canvas.js')}}"></script>
  <script src="{{asset('admin/js/shared/misc.js')}}"></script>
  <!-- endinject -->
</body>

</html>