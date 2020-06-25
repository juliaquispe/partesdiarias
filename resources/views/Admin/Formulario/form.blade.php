<div class="form-group">
    <label class="requerido">Nombre</label>
    <input type="text" class="form-control" style="WIDTH: 350px"  required id="nombre" name="nombre" autocomplete="on" value="{{old('nombre',$Formulario->nombre ?? '')}}"/>
</div>
<div class="form-group">
    <label class="requerido">Codigo</label>
    <input type="text" class="form-control" style="WIDTH: 350px"  required id="codigo" name="codigo" autocomplete="on" value="{{old('codigo', $Formulario->codigo ?? '')}}"/>
</div>
<div class="form-group">
    <label class="requerido">Descripcion</label>
    <input type="text" class="form-control" style="WIDTH: 350px" id="descripcion" name="descripcion" autocomplete="on" value="{{old('descripcion', $Formulario->descripcion ?? '')}}"/>       
</div>
