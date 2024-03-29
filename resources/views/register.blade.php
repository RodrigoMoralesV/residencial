<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="{{ url('dist/img/aigis.ico') }}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrarse</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
  <!-- La wea del error -->
  <link rel="stylesheet" href="{{ url('/css/error.css') }}">
</head>

<body class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="{{ url('/') }}"><b>Aigis </b>Co</a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Registrarse en el sistema</p>

        <form action="register" method="post" enctype="multipart/form-data">
          @csrf

          <div class="input-group mb-3">

            @error('nombre')
            <div class="error">
              {{ $message }}
            </div>
            @enderror

            <input type="text" class="form-control" placeholder="Nombre de Usuario" name="nombre" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
          
            @error('email')
            <div class="error">
              {{ $message }}
            </div>
            @enderror

            <input type="email" class="form-control" placeholder="Email" name="email" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">

            @error('password')
            <div class="error">
              {{ $message }}
            </div>
            @enderror

            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-append">

              @error('foto')
              <div class="error">
                {{ $message }}
              </div>
              @enderror

              <input type="file" class="form-control" placeholder="Foto de perfil" name="foto" accept="image/*">
              <div class="input-group-text">
                <span class="fas fa-image"></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                <label for="agreeTerms">
                  Estoy de acuerdo con los <a href="#">terminos</a>
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

        <p class="text-center pt-4">Ya tienes una cuenta? <a href="{{ url('login') }}" class="text-center">Inicia sesión</a></p>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->

  <!-- jQuery -->
  <script src="../../plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>