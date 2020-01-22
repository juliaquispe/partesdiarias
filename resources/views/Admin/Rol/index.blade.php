@extends ("theme.$theme.layout")

@section('titulo')
rol
@endsection

@section('contenido')
@include ('includes.mensaje')

<div class="box-tools pull-right" style="color:red">
  <a href="{{route('crearrol')}}" class="btn btn-block btn-info btn-sm">
    <i class=" fa fa-plus" ></i> Crear Roles
  </a>
</div>

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Roles</b></h3>

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
                      <th style="text-align: center;">Nombre</th>
                      <th  style="text-align: center;">Opsiones</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($Roll as $Rol)
                  <tr>
                  	<th style="text-align: center;">{{$Rol->id}}</th>
                  	<th style="text-align: center;">{{$Rol->name}}</th>
                    <td style="text-align: center;">
                      <a href="{{url("admin/rol/$Rol->id/editar")}}" class="btn-accion-tabla tooltipsC" title="Editar Rol">
                        <i class="fa fa-paperclip"></i>
                      </a>
                      
                      <form action="{{url("admin/rol/$Rol->id/eliminar")}}" class="d-inline form-eliminar" method="POST" id="form-eliminar">
                        @csrf @method("delete")
                        <button type="submit" class="btn-action-table eliminar tooltipsC" title="Eliminar Rol" >
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
