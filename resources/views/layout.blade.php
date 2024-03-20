<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="{{ url('dist/img/aigis.ico') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>App Residencial</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ url('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ url('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">
  <!-- La wea del error -->
  <link rel="stylesheet" href="{{ url('/css/error.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ url('dist/img/AdminLTELogo.png') }}" alt="AigisCoLogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="{{ url('home') }}" class="nav-link">Home</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="home" class="brand-link">
        <img src="{{ url('dist/img/AdminLTELogo.png') }}" alt="Logo" class="brand-image img-fluid elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Aigis Co.</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{ url('dist/img/',Auth::user()->foto) }}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->nombre }}</a>
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
            <li class="nav-header">LISTA</li>
            <li class="nav-item">
              <a href="{{ url('bloques') }}" class="nav-link">
                <i class="nav-icon far fa-building me-2"></i>
                <p>
                  Bloques
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('eventos') }}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt me-2"></i>
                <p>
                  Eventos
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('paquetes') }}" class="nav-link">
                <i class="nav-icon fa fa-box me-2"></i>
                <p>
                  Paquetes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('permisos') }}" class="nav-link">
                <i class="nav-icon far fa-id-badge me-2"></i>
                <p>
                  Permisos
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('reservas') }}" class="nav-link">
                <i class="nav-icon fa fa-book me-2"></i>
                <p>
                  Reservas
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('residentes') }}" class="nav-link">
                <i class="nav-icon fa fa-users me-2"></i>
                <p>
                  Residentes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('tipos_viviendas') }}" class="nav-link">
                <i class="nav-icon fa fa-home me-2"></i>
                <p>
                  Tipos de vivienda
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('usuarios') }}" class="nav-link">
                <i class="nav-icon fas fa-user-tie me-2"></i>
                <p>
                  Usuarios
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('viviendas') }}" class="nav-link">
                <i class="nav-icon fas fa-home me-2"></i>
                <p>
                  Viviendas
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('zonas_comunes') }}" class="nav-link">
                <i class="nav-icon fas fa-tree me-2"></i>
                <p>
                  Zonas Comunes
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ url('logout') }}" class="nav-link">
                <i class="nav-icon fas fa-door-open"></i>
                <p>
                  Salir
                </p>
              </a>
            </li>
            <br>
          </ul>
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
              <h1 class="m-0">
                @yield('nombre')
                @yield('nuevo')
              </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Table -->
      <div class="row pt-2 px-4">
        <div class="col-12">
          <div class="card">
            <div class="card-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
              @yield('cuerpo')
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
      <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ url('plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ url('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ url('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ url('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ url('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{ url('dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="{{ url('dist/js/pages/dashboard.js') }}"></script> -->
</body>

<!-- Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2024 <a href="https://www.youtube.com/watch?v=NNE5F6imA9g">Aigis Co</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 3.2.0
  </div>
</footer>

</html>