@extends("theme.$theme.layout")
@section('titulo')
estados
@endsection
@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/UsuarioRol/crear.js")}}"></script>
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Alertas/alertas.js")}}"></script>
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/datatable/datatable.js")}}"></script>
  @endsection
@section('contenido')
<div class="box-tools pull-right" style="color:red">
  <a href="{{route('crearpersonal')}}" class="btn btn-block btn-info btn-sm">
    <i class=" fa fa-plus" ></i> Crear Personal
  </a>
</div>
<div class="row">
  <div class="col-12">
    @include ('includes.mensaje')
    <div class="card">
      <div class="card-header" style="background-color: pink;">
        <h3 class="card-title"><b>Crear Personal</b></h3>
        <div class="card-tools">
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0" style="height: 300px;">
          @csrf
        <table class="table table-head-fixed" id="tabla-data">
          <thead>
            <tr>
              <th style="text-align: center;">Nombre</th>
              <th style="text-align: center;">Apellido</th>
              <th style="text-align: center;">CI</th>
              <th style="text-align: center;">Celular</th>
              <th style="text-align: center;">Cargo</th>
              <th style="text-align: center;">Unidad</th>
              <th style="text-align: center;">sexo</th>
              <th style="text-align: center;">Opsiones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($Personal as $Per)
            <tr>
              <td style="text-align: center;">{{$Per->nombre}}</td>
              <td style="text-align: center;">{{$Per->apellido}}</td>
              <td style="text-align: center;">{{$Per->ci}}</td>
              <td style="text-align: center;">{{$Per->celular}}</td>
              <td style="text-align: center;">{{$Per->cargo}}</td>
              <td style="text-align: center;">{{$Per->unidad->nombre}}</td>
              <td></td>
              <td style="text-align: center;">
                <a href="{{url("admin/personal/$Per->id/editar")}}" class="btn-accion-tabla tooltipsC" title="Editar Personal">
                  <i class="fa fa-paperclip"></i>
                </a>  
                <form action="{{url("admin/personal/$Per->id/eliminar")}}" class="d-inline form-eliminar" method="POST" id="form-eliminar">
                  @csrf @method("delete")
                  <button type="submit" class="btn-action-table eliminar tooltipsC" title="Eliminar Personal" >
                    <i class="fa fa-fw fa-trash text-danger"></i>
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