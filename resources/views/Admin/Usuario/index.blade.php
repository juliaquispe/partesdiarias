@extends("theme.$theme.layout")

@section('titulo')
usuario
@endsection

@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Alertas/alertas.js")}}"></script>
@endsection

@section('contenido')

<div class="box-tools pull-right" style="color:red">
  <a href="{{route('crearusuario')}}" class="btn btn-block btn-info btn-sm">
    <i class=" fa fa-plus" ></i> Crear USuarios
  </a>
</div>

<div class="row">
          <div class="col-12">
            @include ('includes.mensaje')
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Usuarios</b></h3>
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
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
                  	<th style="text-align: center;">{{$Usuari->id}}</th>
                  	<th style="text-align: center;">{{$Usuari->usuario}}</th>
                  	<th style="text-align: center;">{{$Usuari->nombre}}</th>
                    <th style="text-align: center;">{{$Usuari->apellido}}</th>
                    <td style="text-align: center;">
                    @foreach($Usuari->roles as $rol)
                    {{$rol->name}} 
                    @endforeach
                    </td>
                    {{-- <th style="text-align: center;">{{$Usuari->roles[0]->name}}</th> --}}
                  	<th style="text-align: center;">{{$Usuari->email}}</th>
                    <td style="text-align: center;">
                      <a href="{{url("admin/usuario/$Usuari->id/editar")}}" class="btn-accion-tabla tooltipsC" title="Editar Usuario">
                        <i class="fa fa-paperclip"></i>
                      </a>  
                      <form action="{{url("admin/usuario/$Usuari->id/eliminar")}}" class="d-inline form-eliminar" method="POST" id="form-eliminar">
                        @csrf @method("delete")
                        <button type="submit" class="btn-action-table eliminar tooltipsC" title="Eliminar Usuario" >
                          <i class="fa fa-fw fa-trash text-danger"></i>
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
@endsection