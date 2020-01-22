@extends("theme.$theme.layout")

@section('titulo')
usuario
@endsection

@section('contenido')
<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" align="center"><b>Usuarios</b></h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th style="text-align: center;">ID</th>
                      <th style="text-align: center;">Usuario</th>
                      <th style="text-align: center;">Nombre</th>
                      <th style="text-align: center;">Apellido</th>
                      <th style="text-align: center;">Email</th>


                    </tr>
                  </thead>
                  <tbody>
                  @foreach($Usuario as $Usuari)
                  <tr>
                  	<th style="text-align: center;">{{$Usuari->id}}</th>
                  	<th style="text-align: center;">{{$Usuari->nombre_usuario}}</th>
                  	<th style="text-align: center;">{{$Usuari->nombre}}</th>
                  	<th style="text-align: center;">{{$Usuari->apellido}}</th>
                  	<th style="text-align: center;">{{$Usuari->email}}</th>

                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
@endsection