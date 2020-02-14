
  <div class="form-group">
      <label class="requerido">Nombre</label>
      <input type="text" class="form-control" style="WIDTH: 350px"  required id="nombre" name="nombre" autocomplete="on" value="{{old('nombre',$Personal->nombre ?? '')}}"/>
  </div>
  <div class="form-group">
      <label class="requerido">Apellido</label>
      <input type="text" class="form-control" style="WIDTH: 350px"  required id="apellido" name="apellido" autocomplete="on" value="{{old('apellido', $Personal->apellido ?? '')}}"/>
  </div>
  <div class="form-group">
      <label class="requerido">CI</label>
      <input type="text" class="form-control" style="WIDTH: 350px" required id="ci" name="ci" autocomplete="on" value="{{old('ci', $Personal->ci ?? '')}}"/>       
  </div>
  <div class="form-group">
    <label class="requerido">Celular</label>
    <input type="number" max="79797979" min="60000000" class="form-control" style="WIDTH: 350px" required id="celular" name="celular" autocomplete="on" value="{{old('celular',$Personal->celular ?? '')}}"/>       
  </div>
  <div class="form-group">
    <label class="requerido">Cargo</label>
    <input type="text" class="form-control" style="WIDTH: 350px" required id="cargo" name="cargo" autocomplete="on" value="{{old('cargo',$Personal->cargo ?? '')}}"/>       
  </div>
  <div class="form-group">
    <label class="requerido">Fecha</label>
    <input type="date" class="form-control" style="WIDTH: 350px" min="1940-01-01" max="2005-01-31" required id="fecha_nac" name="fecha_nac" autocomplete="on" value="{{old('fecha_nac',$Personal->fecha_nac ?? '')}}"/>       
  </div>
  <div class="form-group">
    <select name="unidad_id" id="unidad_id" class="form-control" required>
      <option value="">seleccione la unidad</option>
      @foreach ($Unidad as $id =>$nombre)
          <option
          value="{{$id}}"{{old("unidad_id", $Personal->unidad->id ?? "")==$id ? "selected":""}}>{{$nombre}}
          </option>
      @endforeach
    </select>
  </div>
