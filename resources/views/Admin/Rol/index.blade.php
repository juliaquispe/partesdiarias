@extends ("theme.$theme.layout")

@section('titulo')
rol
@endsection
@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Alertas/alertas.js")}}"></script>
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/datatable/datatable.js")}}"></script>
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
                  	<td style="text-align: center;">{{$Rol->id}}</td>
                  	<td style="text-align: center;">{{$Rol->name}}</td>
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
