<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Freeletics Surabaya Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free/css/all.min.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200&display=swap" rel="stylesheet">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset ('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset ('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset ('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset ('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- CSS.gg Icon -->
  <link href="{{ asset('btn-css.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Table CSS -->
  <link href="{{ asset ('table-css.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('admin.dashboard') }}"><h2 id="nav-title">FREELETICS SURABAYA</h2></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a href="{{ route('auth.logout') }}"><button class="logout-btn button touch">Logout
        </button></a>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('images/logo.png') }}" alt="Freeletics Logo" class="brand-image elevation-5" style="opacity: .8">
      <br>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        @foreach ($admin as $admin)
          <a href="#" class="d-block">{{ $admin->name }}</a>
          @endforeach
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
        <li class="nav-header">OBJECTS</li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.author') }}" class="nav-link active">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Author
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.massworkout') }}" class="nav-link">
            <i class="nav-icon fas fa-dumbbell"></i>
              <p>
                Mass Workout
              </p>
            </a>
        </li>
          <li class="nav-item">
            <a href="{{ route('admin.funrun') }}" class="nav-link">
             <i class="nav-icon fas fa-running"></i>
              <p>
                Fun Run
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.weeks12') }}" class="nav-link">
            <i class="nav-icon fas fa-flag-checkered"></i>
              <p>
                12 - Weeks
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.event') }}" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Event
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.blog') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Blog
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.testimonial') }}" class="nav-link">
              <i class="nav-icon fas fa-star-half-alt"></i>
              <p>
                Testimonial
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.sponsor') }}" class="nav-link">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Sponsor
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.calender') }}" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calender
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      @if(Session::get('Successful'))
                        <div class="alert alert-danger">
                            {{ Session::get('Successful') }}
                        </div>
        @endif
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 h1-title" style="font-size: 40px;">Author</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}" style="color: white; font-size: 20px;font-weight: bold;">Home</a></li>
              <li class="breadcrumb-item active" style="font-size: 20px;color: #edc124;font-weight: bold;">Author</li>
              <br>
            </ol>
          </div><!-- /.col -->

          <!-- Add New Button -->
          <div class="col-sm-9">
          </div>
          <div class="col-sm-3"><a class="button primary new addnew-btn" href="{{ route('admin.upload_photos',1) }}" style="font-family: inherit; font-weight: bold;">Add New</a></div>
          <!-- End of Button -->
          <!-- Table -->
          <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 1%; text-align: center; font-size: 20px;">#</th>
                      <th style="width: 10%; text-align: center; font-size: 20px">Nama Author</th>
                      <th style="width: 20%; text-align: center; font-size: 20px">Deskripsi</th>
                      <th style="width: 25%; text-align: center; font-size: 20px">Gambar</th>
                      <th style="width: 29%; text-align: center; font-size: 20px">Last Update</th>
                      <th style="width: 15%; text-align: center; font-size: 20px">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($photo as $photos)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $photos['title'] }}</td>
                      <td>
                        {{ $photos['subtitle'] }}
                      </td>
                      <td><img src="/freeletics_images/{{$photos->file_path}}" alt="{{$photos->file_path}}" style="width:75%"></td>
                      <td>{{ $photos['updated_at'] }}</td>
                      <td><a class="button touch edit edit-btn" href="{{ route('admin.edit_photos',$photos->id) }}"></a>
                      <a class="button touch delete" href="{{ route('admin.delete_photos', $photos->id) }}"></a></td>
                    </tr>
                  @endforeach
                  </tbody>
                </table>
                <!-- End of Table -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src=".{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
</body>
</html>
