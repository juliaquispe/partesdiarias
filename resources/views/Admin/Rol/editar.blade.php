@extends ("theme.$theme.layout")

@section('titulo')
edtar rol
@endsection 

@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Unidad/crear.js")}}"></script>
@endsection

@section('contenido')
@include ('includes.formularioerror')
@include ('includes.mensaje')
<br>
    <body aling="center">
        <div class="col-md-6">         
          <div class="box-tools pull-right">
            <a href="{{route('rol')}}" class="btn btn-block btn-info btn-sm">{{-- boton para ir a otra tabla --}}
              <i class="fa fa-fw fa-reply-all" ></i> Ver Roles
            </a>
          </div>
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"><b>Actualizar Rol</b></h3>
                </div>
                <div class="card-body">
                    <form action="{{route ('actualizarrol',['id' => $Rol->id])}}" role="form" aling="center" class="form-horizontal" id="form-general" method="POST">
                      @csrf @method('PUT')
                      <div class="row">
                        <div class="col-sm-6">
                          <!-- text input -->
                          <div class="form-group">
                            <label class="requerido">Nombre</label>
                            <input type="text" class="form-control" placeholder="Ingrese Nombre del rol" required id="name" name="name" autocomplete="on" value="{{old('name', $Rol->name ?? '')}}"/>
                          </div>
                        </div>                  
                      </div>
                      <!-- input states -->
                      @include('Includes.botonactualizar')
                    </form>
                  </div>
            </div>
                <!-- /.card-body -->
        </div>
    </body>
@endsection