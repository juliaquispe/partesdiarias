@extends ("theme.$theme.layout")

@section('titulo')
unidad
@endsection
@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Alertas/alertas.js")}}"></script>
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/datatable/datatable.js")}}"></script>
@endsection
@section('contenido')
@include ('includes.mensaje')
@include ('includes.mensajeerror')
@include ('includes.formularioerror')
@if(Auth::user()->permiso->add ==1) {{-- pregunta si tiene permiso para crear para que le mueste o no el boton crear --}}
  <div class="box-tools pull-right">
    <a href="{{route('crearunidad')}}" class="btn btn-block btn-info btn-sm">
      <i class=" fa fa-plus"></i> Crear Unidades
    </a>
  </div>
@endif
<div class="row">
    <div class="col-12">
      <div class="card">
          <div class="card-header" style="background-color:rgb(148, 237, 253)">
            <h3 class="card-title"><b>Lista de Unidades</b></h3>
          </div>
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
                            <td style="text-align: center;">{{$Unidd->id}}</td>
                            <td style="text-align: center;">{{$Unidd->nombre}}</td>
                            <td style="text-align: center;">{{$Unidd->descripcion}}</td>
                            <td style="text-align: center;">{{$Unidd->sigla}}</td>
                            <td style="text-align: center;">
                                  <a href="{{route('verunidad', ['id'=>$Unidd->id])}}" class="btn btn-success btn-xs tooltipC" title="Lista de la unidad">
                                    <i class="fas fa fa-bars"></i>
                                  </a>
                                  <a href="{{url("admin/unidad/$Unidd->id/editar")}}"  class="btn btn-warning btn-xs tooltipC" title="Editar Unidad">
                                    <i class="fas fa fa-wrench"></i>
                                  </a>
                                  <form action="{{url("admin/unidad/$Unidd->id/eliminar")}}" class="d-inline form-eliminar" method="POST" id="form-eliminar">
                                      @csrf @method("delete")
                                        <button type="submit" class="btn btn-danger btn-xs tooltipC" title="Eliminar Unidad">
                                          <i class="fas fa fa-trash"></i>
                                        </button>
                                  </form>
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
