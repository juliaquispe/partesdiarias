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
    <div class="col-md-10" >
        <div class="box-tools pull-right">
            <a href="{{route('formulario')}}" class="btn btn-block btn-info btn-sm">
                <i class="fa fa-fw fa-reply-all" ></i> volver
            </a>
        </div>
        @include ('includes.mensaje')
        @include ('includes.formularioerror')
        <div class="card card-warning">
            <div class="card-header" style="background-color: rgb(140, 223, 151)">
                <div class="card-header">
                    <h3 class="card-title"><font face="Cooper Black" size="5" color="#0E6654"><b>{{$Formulario->nombre}}</b></font></h3>
                </div><br>
                <h5><b>Nombre y Apellido:</b>&nbsp;&nbsp;<i>{{$Personal->nombre}} {{$Personal->apellido}}</i></h5>
                <h5><b>Unidad:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i>{{$Personal->unidad->nombre}}</i></h5>
            </div>
        <div class="card-body" style="background-color: rgb(160, 226, 169)">
            <form class="form-horizontal" action="{{route ('guardar_F2')}}" id="form-general" method="POST">
                @csrf
                <div class="box-body">
                    @include('admin.Partes.Formulario2.form')
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