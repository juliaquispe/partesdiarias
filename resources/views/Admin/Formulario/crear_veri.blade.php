@extends ("theme.$theme.layout")
@section('titulo')
crear formulario
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
                <h3 class="card-title"><b>verificar identidad</b></h3>
            </div>
        <div class="card-body">
            <form class="form-horizontal" action="{{route ('verificar_per')}}" id="form-general" method="POST">
                @csrf
                <div class="box-body">
                    <div class="form-group">
                        <label class="requerido">Introduzca su CI</label>
                        <input type="text" class="form-control" style="WIDTH: 350px"  required id="ci" name="ci" autocomplete="on" value="{{old('ci')}}"/>
                    </div>
                    <div class="form-group">
                        <input type="hidden" class="form-control" style="WIDTH: 350px"  required id="form_id" name="form_id" autocomplete="on" value="{{$form->id}}"/>
                    </div>
                    
                </div>
                <div class="box-footer">
                    <div class="box-tools pull-right" style="text-align: center">
                        <input type="submit" border="1" value="Continuar" width="100px" eight="30px">
                    </div>
                </div>
            </form>
        </div>               
    </div>
    </div>
</body>
 @endsection