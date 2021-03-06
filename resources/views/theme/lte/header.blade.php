  <header class="main-header">
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