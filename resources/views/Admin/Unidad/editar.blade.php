@extends ("theme.$theme.layout")

@section('titulo')
crear unidad
@endsection
@section('scripts')
       <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Unidad/crear.js")}}"></script>
@endsection

@section('contenido')
<br>
			@include ('includes.formularioerror')
			@include ('includes.mensaje')	
            <form class="form-horizontal" action="{{route ('actualizarunidad',['id' => $Unidd->id])}}" id="form-general" method="POST">
                    @csrf
                    @method("put")
              		<div class="box-body">
              			@include('admin.unidad.formeditar')
              		</div>
              			<div class="box-footer"></div>
			</form>     
@endsection