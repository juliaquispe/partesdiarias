@extends("theme.$theme.layout")
@section('titulo')
estados
@endsection

@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/UsuarioRol/crear.js")}}"></script>
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/datatable/datatable.js")}}"></script>
  @endsection
@section('contenido')
<div class="row">
    <div class="col-12">
      @include ('includes.mensaje')
      <div class="card">
        <div class="card-header" style="background-color: pink;">
          <h3 class="card-title"><b>Editar Estados</b></h3>
          <div class="card-tools">
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
            @csrf
          <table class="table table-head-fixed" id="tabla-data">
            <thead>
              <tr>
                <th style="text-align: center;">Usuario</th>
                <th style="text-align: center;">Rol</th>
                <th style="text-align: center;">Estado</th>

              </tr>
            </thead>
            <tbody id="usuariorol">
            @foreach($UsuarioRol as $Usuari)
            <tr>
              <td style="text-align: center;">{{$Usuari->usuario}}</td>
              @foreach($Usuari->roles as $rol)
                <td style="text-align: center;">{{$rol->name}}</td>
              <td id="usuariorol" style="text-align: center;">
                  <input type="checkbox" class="usuariorol" name="usuariorol" id="usuariorol" value=""
                  @if ($rol->estado==1)
                      checked
                  @endif>
                  {{-- activo <input type="radio" class="usuariorol" name="usuariorol" id="usuariorol" value="$rol->estado==1">  
                    <input type="radio" class="usuariorol" name="usuariorol" id="usuariorol" value="$rol->estado==0"> inactivo --}} 
                </td>
                @endforeach
            </tr>
            @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection