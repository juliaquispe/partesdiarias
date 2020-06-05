<body>
  <div class="col-md-8">
      <div class="card card-info">
          <div class="box-tools pull-right">
              <a href="{{route('unidad')}}" class="btn btn-block btn-info btn-sm">{{-- boton para ir a otra tabla --}}
                <i class="fa fa-fw fa-reply-all" ></i> Ver Unidades
              </a>
          </div>
          <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title"><b>Actualizar Datos</b></h3>
            </div>
          </div>
          <br>     
          <form class="form-horizontal">
              <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" required id="nombre" name="nombre" value="{{old('nombre', $Unidd->nombre ?? '')}}" />
                      </div>
                </div>
                <div class="form-group row">
                   <label for="inputPassword3" class="col-sm-2 col-form-label">Descripcion</label>
                      <div class="col-sm-10">
                        <textarea class="form-control"  rows="3" id="descripcion" style="type:text" name="descripcion" value="{{old('descripcion', $Unidd->descripcion ?? '')}}">
                        </textarea>
                      </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Sigla</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control"  required id="sigla" name="sigla" value="{{old('sigla', $Unidd->sigla ?? '')}}"/>
                    </div>
                </div>
              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-info">Actualizar</button> 
                      <form action="{{route('unidad')}}" class="d-inline form-eliminar" method="get" id="form-eliminar">
                      @csrf 
                    <button type="submit" class="btn btn-default float-right">Cancelar</button>
                </form>
              </div>
          </form>
      </div>
  </div>
</body>