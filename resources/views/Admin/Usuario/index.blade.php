@extends("theme.$theme.layout")

@section('titulo')
usuario
@endsection

@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Alertas/alertas.js")}}"></script>
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/datatable/datatable.js")}}"></script>
@endsection

@section('contenido')

@if(Auth::user()->permiso->add ==1) {{-- pregunta si tiene permiso para crear para que le mueste o no el boton crear --}}
  <div class="box-tools pull-right">
    <a href="{{route('crearusuario')}}" class="btn btn-block btn-info btn-sm">
      <i class=" fa fa-plus" ></i> Crear Usuarios
    </a>
  </div>
@endif

<div class="row">
          <div class="col-12">
            @include ('includes.mensaje')
            @include ('includes.mensajeerror')
            <div class="card">
              <div class="card-header" style="background-color:rgb(148, 237, 253)">
                <h3 class="card-title"><b>Lista de Usuarios</b></h3>
                <div class="card-tools">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed" id="tabla-data">
                  <thead>
                    <tr>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Usuario</th>
                      <th style="text-align: center;">Nombre</th>
                      <th style="text-align: center;">Apellido</th>
                      <th style="text-align: center;">Rol</th>
                      <th style="text-align: center;">Email</th>
                      <th style="text-align: center;">Opsiones</th>

                    </tr>
                  </thead>
                  <tbody>
                  @foreach($Usuario as $Usuari)
                  <tr>
                  	<td style="text-align: center;">{{$Usuari->id}}</td>
                  	<td style="text-align: center;">{{$Usuari->usuario}}</td>
                  	<td style="text-align: center;">{{$Usuari->nombre}}</td>
                    <td style="text-align: center;">{{$Usuari->apellido}}</td>
                    <td style="text-align: center;">
                    @foreach($Usuari->roles as $rol)
                    {{$rol->name}} 
                    @endforeach
                    </td>
                    {{-- <th style="text-align: center;">{{$Usuari->roles[0]->name}}</th> --}}
                    <td style="text-align: center;">{{$Usuari->email}}</td>
                    <td style="text-align: center;">
                      @if(Auth::user()->permiso->edit ==1)
                        <a href="{{url("admin/usuario/$Usuari->id/editar")}}" class="btn btn-warning btn-xs" title="Editar Usuario">
                          <i class="fas fa fa-wrench"></i>
                        </a> 
                      @endif
                      @if(Auth::user()->permiso->remove ==1) 
                        <form action="{{url("admin/usuario/$Usuari->id/eliminar")}}" class="d-inline form-eliminar" method="POST" id="form-eliminar">
                          @csrf @method("delete")
                          <button type="submit" class="btn btn-danger btn-xs tooltipC" title="Eliminar Usuario" >
                            <i class="fas fa fa-trash"></i>
                          </button>
                        </form>
                      @endif
                    </td>

                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
</div>
@endsection