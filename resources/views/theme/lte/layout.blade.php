
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('titulo','SPSC') Sistema de pates Diarias</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="{{asset("assets/$theme/plugins/fontawesome-free/css/all.min.css")}}"> 
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset("assets/$theme/dist/css/adminlte.min.css")}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  @yield("styles")
  <link rel="stylesheet" type="text/css" href="{{asset("assets/Css/Custom.css")}}">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-boxed">
<!-- Site wrapper -->
  <div class="wrapper">
  @include ("theme/$theme/header")
  @include ("theme/$theme/aside")

    <div class="content-wrapper">
      <!-- Content Header (Page header)-->
        <section class="content">
         @yield("contenido")
        </section>
    </div>
    
    @include ("theme/$theme/footer")
  </div>
   @yield("scriptsPlugins")
  <script src="{{asset("assets/$theme/plugins/jquery/jquery.min.js")}}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{asset("assets/$theme/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset("assets/$theme/dist/js/adminlte.min.js")}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset("assets/$theme/dist/js/demo.js")}}"></script>

  <script src="{{asset("assets/Js/jquery_validation/jquery.validate.min.js")}}"></script>
  <script src="{{asset("assets/Js/jquery_validation/localization/messages_es.min.js")}}"></script>
  <script src="{{asset("assets/Js/Funciones.js")}}"></script>
  <script src="{{asset("assets/Js/Scripts.js")}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

   @yield("scripts")

</body>
</html>