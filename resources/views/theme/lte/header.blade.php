 {{-- <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="{{asset("assets/$theme/dist/img/user3-128x128.jpg")}}" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Admin
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">en linea</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> ahora</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="seguridad/login" class="dropdown-item dropdown-footer">login</a>
          <a href="seguridad/logout" class="dropdown-item dropdown-footer">salir</a>
        </div>
      </li>
          {{-- <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
              <i class="fas fa-th-large"></i>
            </a>
          </li> 
    </ul>
  </nav>--}}
  <!-- /.navbar --> 

  <header class="main-header">
    <!-- Logo -->
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              @php
                    $aux= session()->get('foto_usuario');
              @endphp
              @if(session()->get('foto_usuario')==null)
                <img src="{{asset("assets\images/usuario.png")}}" class="user-image" alt="User Image">              
              @endif
              @if(session()->get('foto_usuario')!=null)
                <img src="{{Storage::url("imagenes/fotos/usuario/$aux")}}" class="user-image" alt="User Image">                  
              @endif        
              <span class="hidden-xs">{{session()->get('usuario') ?? 'Invitado'}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                @if(session()->get('foto_usuario')==null)
                  <img src="{{asset("assets\images/usuario.png")}}" class="img-circle" alt="User Image">
                @endif
                @if(session()->get('foto_usuario')!=null)                
                  <img src="{{Storage::url("imagenes/fotos/usuario/$aux")}}" class="img-circle" alt="User Image">                 
                @endif
                  <p>
                  <i>
                  {{session()->get('nombre_usuario')}}
                  {{session()->get('apellido')}}
                  </i>
                  <small><i>{{session()->get('email_usuario')}}</i></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                <a href="{{route('login')}}" class="btn btn-default btn-flat">Login</a>
                </div>
                <div class="pull-right">
                <a href="{{route('logout')}}" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>