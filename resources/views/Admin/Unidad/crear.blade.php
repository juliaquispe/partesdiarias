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
				        	
				
				
              	<form class="form-horizontal" action="{{route ('guardarunidad')}}" id="form-general" method="POST">
					
					@csrf
              		<div class="box-body">
              			@include('admin.unidad.form')
              		</div>
              			<div class="box-footer"></div>

              	</form>


              <!-- /.card-header -->
             
@endsection