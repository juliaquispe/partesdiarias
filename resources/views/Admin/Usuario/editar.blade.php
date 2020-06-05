
@extends ("theme.$theme.layout")

@section('titulo')
crear usuario
@endsection
@section('scripts')
       <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Usuario/crear.js")}}"></script>
@endsection

@section('contenido')

    <body aling="center">
        <div class="col-md-6">
            <div class="box-tools pull-right" style="color:red">
                <a href="{{route('usuario')}}" class="btn btn-block btn-info btn-sm">
                     <i class="fa fa-fw fa-reply-all" ></i> Ver Lista Usuarios
                </a>
            </div>
            @include ('includes.formularioerror')
            @include ('includes.mensaje')
            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                     <h3 class="card-title"><b>Editar Usuario</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form role="form" aling="center" method="POST" id="form-general" action="{{route('actualizarusuario', ['id'=>$Usuario->id])}}">
                        @csrf 
                        @method('PUT')
                        @include('admin.usuario.form')
                        @include('Includes.botonactualizar')
                    </form>
                </div>
            </div>
                    <!-- /.card-body -->
        </div>
    </body>
@endsection