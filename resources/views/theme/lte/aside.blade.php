  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-image: url(/assets/images/fondo1.jpg); background-size:cover">
        <body style="color: rgb(28, 29, 71);">
          <div style="text-align: center">
              <span class="brand-text font-weight-light">
                <h2><b><u>Partes Diarias</u></b></h2>
              </span>
          </div>
        </body>
        <div class="sidebar">
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
            <a href="/admin">
              <li style="text-align: center; color:rgb(250, 254, 255)" class="header"><u>--Menu Principal--</u> </li>
            </a>
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item has-treeview">
                        <a class="nav-link">
                          &nbsp;<i class="f307"></i>
                          &nbsp;<i class="fa fa-user"></i> {{--&nbsp es para salto de linea--}}
                            <p style="color:white">
                                &nbsp; Usuario
                              <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('usuario')}}" class="nav-link">
                              <i class="fas fa fa-eye nav-icon"></i>
                              <p style="color:rgb(26, 104, 61)";>Ver Usuario</p>
                            </a>
                          </li>
                        </ul>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('usuariorolestado')}}" class="nav-link">
                                <i class="fas fa fa-align-left nav-icon"></i>
                                <p style="color:rgb(26, 104, 61)";>Estado</p>
                            </a>
                          </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a class="nav-link">
                            &nbsp;<i class="f307"></i>
                            &nbsp;<i class="fa fa-users"></i> {{--&nbsp es para salto de linea--}}
                              <p style="color:rgb(250, 254, 255);">
                                  &nbsp; Personal
                                <i class="right fas fa-angle-left"></i>
                              </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route('personal')}}" class="nav-link">
                                <i class="fas fa fa-eye nav-icon"></i>
                                <p style="color:rgb(26, 104, 61)";>Ver Personal</p>
                              </a>
                            </li>
                        </ul>
                      </li>
                      <li class="nav-item has-treeview">
                          <a class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p style="color:rgb(250, 254, 255);">
                              Unidad
                                <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                          <ul class="nav nav-treeview">
                            <li class="nav-item">
                              <a href="{{route('unidad')}}" class="nav-link">
                                <i class="fas fa fa-eye nav-icon"></i>
                                <p style="color:rgb(26, 104, 61)";>Ver Unidad</p>
                              </a>
                            </li>
                          </ul>
                      </li>
                      <li class="nav-item has-treeview">
                        <a class="nav-link">
                          <i class="nav-icon fas fa-list-ul"></i>
                          <p style="color:rgb(250, 254, 255);">
                            Rol
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('rol')}}" class="nav-link">
                              <i class="fas fa fa-eye nav-icon"></i>
                              <p style="color:rgb(26, 104, 61)";>Ver Rol</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item has-treeview">
                        <a class="nav-link">
                          <i class="nav-icon fas fa-clone"></i>
                          <p style="color:rgb(250, 254, 255);">
                            FORMULARIOS
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="{{route('formulario')}}" class="nav-link">
                              <i class="fas fa fa-folder-open nav-icon"></i>
                              <p style="color:rgb(26, 104, 61)";>Lista de Formularios</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                </ul>
            </nav>
        </div>
  </aside>
