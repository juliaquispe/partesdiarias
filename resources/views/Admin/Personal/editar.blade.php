
@extends ("theme.$theme.layout")
@section('titulo')
crear personal
@endsection
@section('scripts')
       <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Usuario/crear.js")}}"></script>
@endsection
@section('contenido')
<br>
<body aling="center">
    <div class="col-md-6">
        <div class="box-tools pull-right" style="color:red">
        <a href="{{route('personal')}}" class="btn btn-block btn-info btn-sm">
            <i class="fa fa-fw fa-reply-all" ></i> Ver Lista de Personal
        </a>
        </div>       
        @include ('includes.mensaje')
        @include ('includes.formularioerror')
        <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"><b>Editar Personal</b></h3>
                </div>
                <div class="card-body">
                    <form role="form" aling="center" method="POST" id="form-general" action="{{route('actualizarpersonal', ['id'=>$Personal->id])}}">
                        @csrf 
                        @method('PUT')
                        @include('admin.personal.form')
                        @include('Includes.botonactualizar')
                    </form>
                </div>           
        </div>
    </div>
</body>
@endsection
