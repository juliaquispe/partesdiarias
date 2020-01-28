<div class="card card-info">
  <div style="type=text/css"
    .boton_1{
      text-decoration: none;
      padding: 10px;
      font-weight: 600;
      font-size: 20px;
      color: #ffffff;
      background-color: #1883ba;}>
    <a href="{{route('unidad')}}"> Ver Unidades </a>
  </div>
  <br>
    <div class="card-header">
      <h3 class="card-title">Actualizar Datos</h3>
    </div>        
    <!-- /.card-header -->
    <!-- form start -->
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
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-info">Actualizar</button>
          
        <form action="{{route('unidad')}}" class="d-inline form-eliminar" method="get" id="form-eliminar">
          @csrf 
          <button type="submit" class="btn btn-default float-right">Cancelar</button>
        </form>
      </div>
      <!-- /.card-footer -->
    </form>
  </div>
  <!-- /.card -->

</div>