@extends("theme.$theme.layout")
@section('titulo')
formulario
@endsection
@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Alertas/alertas.js")}}"></script>
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/datatable/datatable.js")}}"></script>
@endsection
@section('contenido')
@include ('includes.mensaje')
@include ('includes.mensajeerror')
<div class="box-tools pull-right">
  @if(session()->get('usuario')!=null)
     <a href="{{route('crearformulario')}}" class="btn btn-block btn-info btn-sm">
      <i class=" fa fa-plus" ></i> Crear Formulario
    </a> 
  @endif
    
</div>
<div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header" style="background-color:rgb(148, 237, 253)">
            <h3 class="card-title"><b>Lista de Formulario</b></h3>
        </div>
        <div class="card-body table-responsive p-0" style="height: 300px;">
          @csrf   {{--  //Imprime una llave de acceso al enviar al store deje entrar gracias a esta llave --}}
            <table class="table table-head-fixed" id="tabla-data">
                <thead>
                    <tr style="width: 100%">
                      <th style=" width:60%">Nombre</th>
                      <th style="text-align:center; width:20%">Form-Codigo</th>
                      <th style="text-align:center; width:20%">Opcion</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($Formulario as $Form)
                    <tr>
                      <td>{{$Form->nombre}}</td>
                      <td style="text-align: center;">{{$Form->codigo}}</td>
                      <td style="text-align: center;">
                        @if(session()->get('usuario')!=null)
                          <a href="{{url("admin/formulario/$Form->id/editar")}}" class="btn btn-warning btn-xs tooltipC" title="Editar Form">
                            <i class="fas fa fa-wrench"></i>
                          </a>  
                        @endif
                        @if(session()->get('usuario')!=null)
                          <form action="{{url("admin/formulario/$Form->id/eliminar")}}" class="d-inline form-eliminar" method="POST" id="form-eliminar">
                            @csrf @method("delete")
                            <button type="submit" class="btn btn-danger btn-xs tooltipC" title="Eliminar Rol" >
                              <i class="fas fa fa-trash"></i>
                            </button>
                          </form>
                        @endif
                        {{-- <a  action="{{route('select_form', ['id'=>$Form->id])}}" class="btn btn-success btn-xs tooltipC" title="Redactar Parte">
                          <i class="fas fa fa-file"></i>
                        </a>   --}}
                        <a href="{{route('crear_veri', ['id'=>$Form->id])}}" class="btn btn-success btn-xs tooltipC" title="Redactar Parte">
                          <i class="fas fa fa-file"></i>
                        </a> 
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