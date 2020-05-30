
@extends ("theme.$theme.layout")
@section('titulo')
crear personal
@endsection



@section("styles")
    <link href="{{asset("assets/Js/bootstrap-fileinput/css/fileinput.min.css")}}" rel="stylesheet" type="text/css"/>
@endsection

@section("scriptsPlugins")
    <script src="{{asset("assets/Js/bootstrap-fileinput/js/fileinput.min.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/Js/bootstrap-fileinput/js/locales/es.js")}}" type="text/javascript"></script>
    <script src="{{asset("assets/Js/bootstrap-fileinput/themes/fas/theme.min.js")}}" type="text/javascript"></script>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/Personal/crear.js")}}"></script>
@endsection
@section('contenido')
<br>
<body aling="center">
    <div class="col-md-6">
        <div class="box-tools pull-right" style="color:red">
        <a href="{{route('personal')}}" class="btn btn-block btn-info btn-sm">
            <i class="fa fa-fw fa-reply-all" ></i> Ver Personal
        </a>
        </div>       
        @include ('includes.mensaje')
        @include ('includes.formularioerror')
        <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title"><b>Crear Personal</b></h3>
                </div>
            <div class="card-body">
                <form class="form-horizontal" action="{{route ('guardarpersonal')}}" id="form-general" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        @include('admin.personal.form')
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
