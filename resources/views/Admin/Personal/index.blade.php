@extends("theme.$theme.layout")
@section('titulo')
personal
@endsection
@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Alertas/alertas.js")}}"></script>
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/datatable/datatable.js")}}"></script>
  @endsection
@section('contenido')
@if(Auth::user()->permiso->add ==1) {{-- pregunta si tiene permiso para crear para que le mueste o no el boton crear --}}
  <div class="box-tools pull-right">
    <a href="{{route('crearpersonal')}}" class="btn btn-block btn-info btn-sm">
      <i class=" fa fa-plus" ></i> Crear Personal
    </a>
  </div>
@endif
<div class="row">
  <div class="col-12">
    @include ('includes.mensaje')
    @include ('includes.mensajeerror')
    <div class="card">
      <div class="card-header" style="background-color:rgb(148, 237, 253)">
        <h3 class="card-title"><b>Lista de Personal</b></h3>
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
              <th style="text-align: center;">Item</th>
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
              <td style="text-align: center;">{{$Per->item}}</td>
              <td style="text-align: center;">{{$Per->cargo}}</td>
              <td style="text-align: center;">{{$Per->unidad->nombre}}</td>
              <td style="text-align: center;">{{$Per->foto}}</td>
              <td style="text-align: center;">
        
                @if(Auth::user()->permiso->edit ==1)
                  <a href="{{url("admin/personal/$Per->id/editar")}}" class="btn btn-warning btn-xs" title="Editar Personal">
                    <i class="fas fa fa-wrench"></i>{{--es el icono del dibujito--}}
                  </a> 
                @endif
                @if(Auth::user()->permiso->remove ==1) 
                  <form action="{{url("admin/personal/$Per->id/eliminar")}}" method="POST" id="form-eliminar"  class="d-inline form-eliminar" >
                    @csrf @method("delete")
                    <button type="submit" title="Eliminar Personal" class="btn btn-danger btn-xs tooltipC">
                      <i class="fas fa fa-trash"></i>{{--es el icono del dibujito--}}
                    </button>
                  </form>
                @endif
                {{-- @if(Auth::user()->permiso->remove ==1) 
                  <form action="{{url("admin/personal/$Per->id/eliminar")}}" method="POST" id="form-eliminar" class="form-eliminar btn btn-danger btn-xs">
                    @csrf @method("delete")
                    <button type="submit" title="Eliminar Personal">
                      <i class="glyphicon glyphicon-remove" ></i>
                    </button>
                  </form>
                @endif --}}
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