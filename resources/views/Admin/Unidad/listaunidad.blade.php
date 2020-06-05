@extends ("theme.$theme.layout")
@section('titulo')
listaunidad
@endsection
 @section('scripts')
   <script type="text/javascript" src="{{asset("assets/Pages/Scripts/Admin/datatable/datatable.js")}}"></script>
 @endsection
@section('contenido')
    <div class="row">
         <div class="col-12">
             <div class="box box-primary">
                <div class="card">
                    <table>
                    <tr>
                        <td>
                            <div class="card-header box-tools pull-right" style="background-color:rgb(22, 154, 177);">
                                <a href="{{route('unidad')}}" class="btn btn-block btn-info btn-sm col-3" style="background-color:rgb(88, 167, 199);">
                                    <i class=" fa fa-undo"></i> Volver
                                </a>
                            </div>
                        </td>
                        <td>
                            <div class="card-header box-tools pull-right" style="background-color:rgb(22, 154, 177);">
                                <a href="{{route('pdfunidad', ['id'=>$Unidad->id])}}" target="_blank" class="btn btn-block btn-info btn-sm col-3" style="background-color:rgb(88, 167, 199);">
                                    <i class=" fa fa-paper-plane"></i> exportar a PDF
                                </a>
                            </div>
                        </td>
                    </tr>
                    </table>
                    <div class="card-header" style="background-color:rgb(148, 237, 253);">
                        <h3 class="card-title" >
                            <b>Unidad:</b>  &nbsp;{{$Unidad->nombre}}<br>
                            <b>Sigla:</b>  &nbsp;{{$Unidad->sigla}}
                        </h3>
                    </div>
                 <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                        <table class="table table-head-fixed" id="tabla-data">
                            <thead>
                                <tr>
                                    <th style="text-align: center;">Item</th>
                                    <th style="text-align: center;">Nombre</th>
                                    <th style="text-align: center;">Apellido</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($Personal as $Per)
                                    @if ($Per->unidad->nombre==$Unidad->nombre)
                                        <tr>
                                            <td style="text-align: center;">{{$Per->item}}</td>
                                            <td style="text-align: center;">{{$Per->nombre}}</td>
                                            <td style="text-align: center;">{{$Per->apellido}}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
 