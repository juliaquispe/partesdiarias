<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPSC Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: url(/assets/images/fondo2.jpg); background-size:cover">
<div class="login-box" >
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="background-image: url(/assets/images/fondo3.jpg); background-size:cover">
      <a style="color: rgb(74, 191, 199)"><b><h3 style="align-center">Sistema De Partes Diarias</h3></b></a>
      <p class="login-box-msg"><a style="color: rgb(74, 191, 199)">Iniciar Sesion</a></p>
      @if (session('status'))
      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
  @endif
  @if ($errors->any())
      <div class="alert alert-danger alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
          <div class="alert-text">
              @foreach ($errors->all() as $error)
                  <span>{{ $error }}</span>
              @endforeach
          </div>
      </div>
  @endif


          <form action="{{route('loginpost')}}" method="POST" autocomplete="off">
                @csrf <!--esto es untocken para enviar datos con metodo post-->
                <div class="input-group mb-3">
                    <input type="Text" style=" background-color:#99cccc" name="usuario" class="form-control" value="{{old('usuario')}}" placeholder="Ingrese Usuario">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    <div class="input-group-append">
                      <div class="input-group-text">
                         <span class="fas fa-user"></span>
                      </div>
                    </div>                   
                </div>
                <div class="input-group mb-3">
                    <input type="password" style=" background-color:#99cccc" name="password" class="form-control" placeholder="Ingrese Contraseña">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <button type="submit" style=" background-color:#66cccc;color:black; font-family:Verdana;text-align:center;" class="btn btn-primary btn-block btn-flat">Enviar</button>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-6">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <!-- /.col -->
                </div>
            </form>

     
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- AdminLTE App -->
<script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>

</body>
</html>
