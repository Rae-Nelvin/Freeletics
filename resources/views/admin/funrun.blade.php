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
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
  <link href='https://css.gg/pen.css' rel='stylesheet'>
  <link href='https://css.gg/close-o.css' rel='stylesheet'>
  <!-- Table CSS -->
  <link href="{{ asset ('table-css.css') }}" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a href="{{ route('auth.logout') }}"><button>Logout
        </button></a>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="{{ asset('images/logo.png') }}" alt="Freeletics Logo" class="brand-image elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Freeletics Surabaya</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin 1</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </li>
        <li class="nav-header">OBJECTS</li>
          <li class="nav-item">
            <a href="{{ route('admin.author') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Author
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.massworkout') }}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Mass Workout
              </p>
            </a>
        </li>
          <li class="nav-item">
            <a href="{{ route('admin.funrun') }}" class="nav-link active">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Fun Run
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.weeks12') }}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
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
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Testimonial
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.sponsor') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Fun Run</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Fun Run</li>
            </ol>
          </div><!-- /.col -->
          <!-- Add New Button -->
          <div class="col-sm-10">
          </div>
          <div class="col-sm-2"><a href="#"><button type="button" class="btn btn-primary addnew-btn">Add New</button></a></div>
          <!-- End of Button -->
          <!-- Table -->
          <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 1%">#</th>
                      <th style="width: 10%">Title</th>
                      <th style="width: 20%">Sub Title</th>
                      <th style="width: 30%">Image</th>
                      <th style="width: 29%">last Update</th>
                      <th style="width: 10%;">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1.</td>
                      <td>Lorem, ipsum.</td>
                      <td>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim molestiae laudantium asperiores et sint aliquid.
                      </td>
                      <td><img src="{{ asset('images/12weeks.png')}}" alt="picture-1" style="width: 50%"></td>
                      <td>Lorem ipsum dolor sit amet.</td>
                      <td><a href="#"><button type="button" class="btn btn-icon btn-flat btn-default edit-btn" data-original-title="Edit" ><i class="gg-pen" style="color: green" aria-hidden="true"></i></button></a>
                      <a href="#"><button type="button" class="btn btn-icon btn-flat btn-default delete-btn" data-original-title="Delete"><i class="gg-close-o" style="color: red" aria-hidden="true"></i></button></a></td>
                    </tr>
                    <tr>
                      <td>2.</td>
                      <td>Lorem, ipsum.</td>
                      <td>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, nam illum assumenda natus rem harum.
                      </td>
                      <td><img src="{{ asset('images/about.png')}}" alt="picture-2" style="width: 50%"></td>
                      <td>Lorem ipsum dolor sit amet.</td>
                      <td><a href="#"><button type="button" class="btn btn-icon btn-flat btn-default edit-btn" data-original-title="Edit" ><i class="gg-pen" style="color: green" aria-hidden="true"></i></button></a>
                      <a href="#"><button type="button" class="btn btn-icon btn-flat btn-default delete-btn" data-original-title="Delete"><i class="gg-close-o" style="color: red" aria-hidden="true"></i></button></a></td>
                    </tr>
                    <tr>
                      <td>3.</td>
                      <td>Lorem, ipsum.</td>
                      <td>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur minus beatae molestias expedita? Maxime, culpa.
                      </td>
                      <td><img src="{{ asset('images/author1.jpg')}}" alt="picture-3" style="width: 50%"></td>
                      <td>Lorem ipsum dolor sit amet.</td>
                      <td><a href="#"><button type="button" class="btn btn-icon btn-flat btn-default edit-btn" data-original-title="Edit" ><i class="gg-pen" style="color: green" aria-hidden="true"></i></button></a>
                      <a href="#"><button type="button" class="btn btn-icon btn-flat btn-default delete-btn" data-original-title="Delete"><i class="gg-close-o" style="color: red" aria-hidden="true"></i></button></a></td>
                    </tr>
                    <tr>
                      <td>4.</td>
                      <td>Lorem, ipsum.</td>
                      <td>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta est, voluptatem explicabo temporibus esse modi.
                      </td>
                      <td><img src="{{ asset('images/author2.jpg')}}" alt="picture-4" style="width: 50%"></td>
                      <td>Lorem ipsum dolor sit amet.</td>
                      <td><a href="#"><button type="button" class="btn btn-icon btn-flat btn-default edit-btn" data-original-title="Edit" ><i class="gg-pen" style="color: green" aria-hidden="true"></i></button></a>
                      <a href="#"><button type="button" class="btn btn-icon btn-flat btn-default delete-btn" data-original-title="Delete"><i class="gg-close-o" style="color: red" aria-hidden="true"></i></button></a></td>
                    </tr>
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
