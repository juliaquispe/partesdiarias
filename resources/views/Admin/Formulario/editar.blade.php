@extends ("theme.$theme.layout")
@section('titulo')
editar formulario
@endsection
@section('scripts')
       <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Formulario/crear.js")}}"></script>
@endsection
@section('contenido')
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
                    <h3 class="card-title"><b>Editar Formulario</b></h3>
                </div>
                <div class="card-body">
                    <form role="form" aling="center" method="POST" id="form-general" action="{{route('actualizarformulario', ['id'=>$Formulario->id])}}">
                        @csrf 
                        @method('PUT')
                        @include('admin.formulario.form')
                        @include('Includes.botonactualizar')
                    </form>
                </div>           
        </div>
    </div>
</body>
@endsection
