@extends ("theme.$theme.layout")

@section('titulo')
unidad
@endsection
@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Alertas/alertas.js")}}"></script>
@endsection
@section('contenido')
@include ('includes.mensaje')
@include ('includes.formularioerror')
<div class="box-tools pull-right" style="color:red">
  <a href="{{route('crearunidad')}}" class="btn btn-block btn-info btn-sm">
    <i class=" fa fa-plus" ></i> Crear Unidades
  </a>
</div>

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><b>Unidades</b></h3>

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
                      <th style="text-align: center;">Descripcion</th>
                      <th style="text-align: center;">Sigla</th>
                      <th style="text-align: center;">Opsiones</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($Unidad as $Unidd)
                  <tr>
                  	<th style="text-align: center;">{{$Unidd->id}}</th>
                  	<th style="text-align: center;">{{$Unidd->nombre}}</th>
                  	<th style="text-align: center;">{{$Unidd->descripcion}}</th>
                    <th style="text-align: center;">{{$Unidd->sigla}}</th>
                    <td>
                      <a href="{{url("admin/unidad/$Unidd->id/editar")}}" class="btn-accion-tabla tooltipsC" title="Editar Unidad">
                        <i class="fa fa-paperclip"></i>
                      </a>
                      <form action="{{url("admin/unidad/$Unidd->id/eliminar")}}" class="d-inline form-eliminar" method="POST" id="form-eliminar">
                        @csrf @method("delete")
                        <button type="submit" class="btn-action-table eliminar tooltipsC" title="Eliminar Unidad">
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
