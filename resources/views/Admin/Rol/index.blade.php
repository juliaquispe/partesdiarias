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
@include ('includes.mensajeerror')
@if(Auth::user()->permiso->add ==1) {{-- pregunta si tiene permiso para crear para que le mueste o no el boton crear --}}
  <div class="box-tools pull-right" style="color:red">
    <a href="{{route('crearrol')}}" class="btn btn-block btn-info btn-sm">
      <i class=" fa fa-plus" ></i> Crear Roles
    </a>
  </div>
@endif
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header" style="background-color:rgb(148, 237, 253)">
                <h3 class="card-title"><b>Lista de Roles</b></h3>
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
                      @if(Auth::user()->permiso->edit ==1)
                        <a href="{{url("admin/rol/$Rol->id/editar")}}" class="btn-accion-tabla tooltipsC" title="Editar Rol">
                          <i class="fa fa-paperclip"></i>
                        </a>  
                      @endif
                      @if(Auth::user()->permiso->remove ==1)
                        <form action="{{url("admin/rol/$Rol->id/eliminar")}}" class="d-inline form-eliminar" method="POST" id="form-eliminar">
                          @csrf @method("delete")
                          <button type="submit" class="btn-action-table eliminar tooltipsC" title="Eliminar Rol" >
                            <i class="fa fa-fw fa-trash text-danger"></i>
                          </button>
                        </form>
                      @endif
                    </td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
@endsection
