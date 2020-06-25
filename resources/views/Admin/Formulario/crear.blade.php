@extends ("theme.$theme.layout")
@section('titulo')
crear formulario
@endsection
@section('scripts')
  <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Formulario/crear.js")}}"></script>
@endsection
@section('contenido')
<br>
<body aling="center">
    <div class="col-md-6">
        <div class="box-tools pull-right">
            <a href="{{route('formulario')}}" class="btn btn-block btn-info btn-sm">
                <i class="fa fa-fw fa-reply-all" ></i> Ver Lista de Formulario
            </a>
        </div>
        @include ('includes.mensaje')
        @include ('includes.formularioerror')
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title"><b>Crear Nuevo Formulario</b></h3>
            </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route ('guardarformulario')}}" id="form-general" method="POST">
                @csrf
                <div class="box-body">
                    @include('admin.formulario.form')
                </div>
                <div class="box-footer">
                    <div class="box-body">
                        @include('Includes.botoncrear')
                    </div>
                </div>
            </form>
        </div>               
    </div>
    </div>
</body>
 @endsection

    