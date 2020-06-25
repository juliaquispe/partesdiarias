@extends ("theme.$theme.layout")

@section('titulo')
form...
@endsection

@section('contenido')
@include ('includes.mensaje')
@include ('includes.mensajeerror')
@include ('includes.formularioerror')

    <div class="col-md-10"> 
        <div class="card">
            <div class="card-header" style="background-color:rgb(94, 201, 139)">
                    <h3 align="center"><b>Bienvenido</b></h3><br>
                    <div class="form-group">
                        @if ($Personal->foto==null)
                        <img align="left" src="{{asset("assets\images/usuario.png")}}" alt="User Image"width="230px" eight="230px">
                        @endif  
                        @if ($Personal->foto!=null)
                        <img align="left" src="{{Storage::url("Datos/Fotos/Personal/$Personal->foto")}}" alt="User Image" width="230px" eight="230px">
                        @endif                          
                            <label class="control-label">
                                <div><u>Nombre</u>: <i>{{$Personal->nombre}}</i> </div><br>
                                <div><u>Apellido</u>: <i>{{$Personal->apellido}}</i> </div><br>
                                <div><u>CI</u>: <i></i>{{$Personal->ci}}</div><br>
                                <div><u>Unidad</u>: <i>{{$Personal->unidad->nombre}}</i> </div><br>
                                <div><u>Cargo</u>: <i>{{$Personal->cargo}}</i> </div><br>
                                <div><u>Formulario</u>: <i></i> </div><br>
                            </label><br>
                    </div>
                    <div class="box-tools pull-right" style="text-align: center">
                        <input type="image" border="1" src="{{asset("assets\images/boton.jpg")}}" width="100px" eight="30px" onclick="location.href='{{route('crear_parte')}}'">
                    </div>
            </div>
        </div>
    </div>
@endsection
