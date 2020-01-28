<body aling="center">
 <div class="col-md-6">
  <div class="box-tools pull-right" style="color:red">
    <a href="{{route('unidad')}}" class="btn btn-block btn-info btn-sm">
      <i class="fa fa-fw fa-reply-all" ></i> Ver Unidades
    </a>
  </div>
            <!-- general form elements disabled -->
          <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title"><b>Crear Unidad</b></h3></div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" aling="center">
                      <!-- text input -->
                      <div class="form-group">
                        <label class="requerido">Nombre</label>
                        <input type="text" class="form-control" placeholder="Ingresse Nombre de  la unidad" required id="nombre" name="nombre" autocomplete="on" value="{{old("nombre")}}" />
                      </div>
                      <div class="form-group">
                        <label>Descripcion</label>
                        <textarea class="form-control" rows="3" placeholder="" id="descripcion" name="descripcion" value="{{old("nombre")}}"></textarea>
                      </div>
                      <!-- textarea -->
                      <div class="form-group">
                        <label class="requerido">Sigla</label>
                      <input type="text" class="form-control" placeholder="Ingrese la sigla" required id="sigla" name="sigla" autocomplete="on"/>
                      </div>
                  <!-- input states -->
                  @include('Includes.botoncrear')
                </form>
                </div>
                
            </div>
              <!-- /.card-body -->
 </div>
</body>