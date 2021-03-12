
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perizinan praktik Dokter</title>
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
    
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
  </head>
  <body>
    <div class="container-scroller">
      <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="{{Route('admin.beranda')}}">
            <img src="{{asset('logo.png')}}" alt="logo"/></a>
          <a class="navbar-brand brand-logo-mini" href="{{Route('admin.beranda')}}">
            <img src="{{asset('pemkab.png')}}" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
          <!-- <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block">Help : +050 2992 709</li>
           
          </ul> -->
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-bell-outline"></i>
                <span class="count">7</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-email-outline"></i>
                <span class="count bg-success">3</span>
              </a>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="{{asset('admin/images/faces/face8.jpg')}}" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="{{asset('admin/images/faces/face8.jpg')}}" alt="Profile image">
                  <p class="mb-1 mt-3 font-weight-semibold">Allen Moreno</p>
                  <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                <a class="dropdown-item">Messages<i class="dropdown-item-icon ti-comment-alt"></i></a>
                <a class="dropdown-item">Activity<i class="dropdown-item-icon ti-location-arrow"></i></a>
                <a class="dropdown-item">FAQ<i class="dropdown-item-icon ti-help-alt"></i></a>
                <a class="dropdown-item">Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="{{asset('admin/images/faces/face8.jpg')}}" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Allen Moreno</p>
                  <p class="designation">Premium user</p>
                </div>
              </a>
            </li>
            <li class="nav-item nav-category">Menu Admin</li>
            <li class="nav-item">
              <a class="nav-link" href="{{Route('admin.beranda')}}">
                <i class="menu-icon typcn typcn-document-text"></i>
                <span class="menu-title">Beranda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.user.index')}}">User</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.pemohon.index')}}">Pemohon</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#permohonan" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Permohonan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="permohonan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.permohonan.index')}}">Pembuatan Baru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.pemohon.index')}}">Perpanjangan Izin</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#admin_riwayat_permohonan" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Riwayat Permohonan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="admin_riwayat_permohonan">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.permohonan.index')}}">Pembuatan Baru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.pemohon.index')}}">Perpanjangan Izin</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item nav-category">Menu User </li>
            <li class="nav-item">
                <a class="nav-link" href="{{Route('admin.beranda')}}">
                  <i class="menu-icon typcn typcn-document-text"></i>
                  <span class="menu-title">Beranda</span>
                </a>
              </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#permohonan_pemohon" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Permohonan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="permohonan_pemohon">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('pemohon.permohonan.index')}}">Pembuatan Baru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.pemohon.index')}}">Perpanjangan Izin</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#riwayat_permohonan_pemohon" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon typcn typcn-coffee"></i>
                <span class="menu-title">Riwayat Permohonan</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="riwayat_permohonan_pemohon">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.user.index')}}">Pembuatan Baru</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{Route('admin.pemohon.index')}}">Perpanjangan Izin</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
        @yield('content')
          <!-- content-wrapper ends -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <script src="{{asset('admin/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/vendors/js/vendor.bundle.addons.js')}}"></script>
    <script src="{{asset('admin/js/shared/off-canvas.js')}}"></script>
    <script src="{{asset('admin/js/shared/misc.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
            $('.datatable').DataTable();
        } );
    </script>
    <!-- endinject -->
    <!-- <script src="{{asset('admin/js/shared/jquery.cookie.js')}}"></script> -->
  </body>
</html>