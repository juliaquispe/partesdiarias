
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
    <label class="requerido">Rango</label>
    <input type="text" class="form-control" style="WIDTH: 350px" required id="cargo" name="cargo" autocomplete="on" value="{{old('cargo',$Personal->cargo ?? '')}}"/>       
  </div>
  <div class="form-group col-lg-10" >
    <label for="sexo" class="requerido">Genero</label>
    <select class="form-control" required id="sexo" name="sexo">
      <option>Seleccione su Genero</option>
      <option value="masculino"{{old("sexo",$Personal->sexo?? "")=="masculino" ? "selected":""}}>Masculino</option>
      <option value="femenino"{{old("sexo",$Personal->sexo?? "")=="femenino" ? "selected":""}}>Femenino</option>
    </select>
    {{-- <form action="../../form-result.php" method="post" target="_blank">
      <p>
        <label>Sexo:</label><br>
        <input type="radio" name="sexo" id="sexo" name="sexo" value="femenino" required value="{{old('sexo',$Personal->sexoc ?? '')}}"> Masculino
        <input type="radio" name="sexo" id="sexo" name="sexo" value="masculino" required value="{{old('sexo',$Personal->sexoc ?? '')}}"> Femenino<br>
        </p></form> --}}
   </div>
  <div class="form-group">
    <label class="requerido">Fecha</label>
    <input type="date" class="form-control" style="WIDTH: 350px" min="1940-01-01" max="2005-01-31" required id="fecha_nac" name="fecha_nac" autocomplete="on" value="{{old('fecha_nac',$Personal->fecha_nac ?? '')}}"/>       
  </div>
  <div class="form-group col-lg-10"> 
  <label class="requerido">Unidad</label>
    <select name="unidad_id" id="unidad_id" class="form-control" required>
      <option value="" style="WIDTH: 350px">seleccione la unidad</option>
      @foreach ($Unidad as $id =>$nombre)
          <option
          value="{{$id}}"{{old("unidad_id", $Personal->unidad->id ?? "")==$id ? "selected":""}}>{{$nombre}}
          </option>
      @endforeach
    </select>
  </div>
  
  <div class="form-group">
    <label for="foto" class="col-lg-3 control-label">Foto</label>
    <div class="col-lg-4">
        <input type="file" name="foto_up" id="foto" data-initial-preview="{{isset($personal->foto) ? Storage::url("Datos/Fotos/Personal/$personal->foto") : "http://www.placehold.it/250x250/EFEFEF/AAAAAA&text=foto+personal"}}" accept="image/*"/>
    </div>
  </div>