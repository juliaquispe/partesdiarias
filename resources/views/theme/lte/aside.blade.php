   <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: rgb(98, 161, 177)">
    <!-- Brand Logo  -->
          <body style="color: rgb(28, 29, 71);">
                <span class="brand-text font-weight-light">
                  <h2><b><u>Partes Diarias</u></b></h2>
                </span>
          </body>
    <!-- Sidebar -->
    <div class="sidebar">
          <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset("assets\images/usuario.png")}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#">
            
            <span style="color: rgb(28, 29, 71);" class="hidden-xs">{{session()->get('usuario')?? 'invitado'}}</span>
            <br>
            <i class="fa fa-circle text-warning"></i> In Line
          </a>
        </div>
      </div>

    <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                  with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview">
              <a href="{{route('personal')}}" class="nav-link">
                &nbsp;<i class="f307"></i>
                 &nbsp;<i class="fa fa-users"></i> {{--&nbsp es para salto de linea--}}
                  <p style="color:rgb(232, 241, 241);">
                      &nbsp; Personal
                    <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('personal')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p style="color:rgb(115, 255, 0)";>Ver Personal</p>
                    </a>
                  </li>
                </ul>
              </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p style="color:rgb(232, 241, 241);">
                  Permiso
                    <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="../charts/inline.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p style="color:rgb(115, 255, 0)";>Ver Permiso</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p style="color:rgb(232, 241, 241);">
                    Unidad
                      <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{route('unidad')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p style="color:rgb(115, 255, 0)";>Ver Unidad</p>
                      </a>
                    </li>
                  </ul>
                </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie"></i>
                  <p style="color:rgb(232, 241, 241);">
                    Rol
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('rol')}}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p style="color:rgb(115, 255, 0)";>Ver Rol</p>
                    </a>
                  </li>
                </ul>
              </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
