

               <!-- general form elements disabled -->

                 <!-- /.card-header -->
   

    <div class="form-group">
      <label class="requerido">Usuario</label>
      <input type="text" class="form-control" style="WIDTH: 350px" placeholder="Admin" required id="usuario" name="usuario" autocomplete="on" value="{{old('usuario', $Usuario->usuario ?? '')}}" />
    </div>

    <div class="form-group">
        <label class="requerido">Nombre</label>
        <input type="text" class="form-control" style="WIDTH: 350px" placeholder="Juan" required id="nombre" name="nombre" autocomplete="on" value="{{old('usuario', $Usuario->nombre ?? '')}}"/>
    </div>
    <div class="form-group">
        <label class="requerido">Apellido</label>
        <input type="text" class="form-control" style="WIDTH: 350px" placeholder="Perez" required id="apellido" name="apellido" autocomplete="on" value="{{old('usuario', $Usuario->apellido ?? '')}}"/>
    </div>
    <div class="form-group">
        <label class="requerido">Email</label>
        <input type="email" class="form-control" style="WIDTH: 350px" placeholder="juan@gmail.com" required id="email" name="email" autocomplete="on" value="{{old('usuario', $Usuario->email ?? '')}}"/>       
    </div>
    <div class="form-group">
        <label class="{{!isset($Usuario) ? 'requerido' : ''}}">Contraseña</label>
        <input type="password" class="form-control" style="WIDTH: 350px" placeholder="******" {{!isset($Usuario) ? 'required' : ''}} id="password" name="password" autocomplete="on" minlength="5"/>       
    </div>
    <div class="form-group">
        <label class="{{!isset($Usuario) ? 'requerido' : ''}}">Repita Contraseña</label>
        <input type="password" class="form-control" style="WIDTH: 350px" placeholder="******" {{!isset($Usuario) ? 'required' : ''}} id="re_password" name="re_password" autocomplete="on" minlength="5"/>       
    </div>
   <div class="form-group">
        <label for="rol_id" class="col-lg-3 control-label requerido">Rol</label>
        <div class="col-lg-5">
            <select name="rol_id" id="rol_id" class="form-control" required>
                <option value=""> Seleccione rol</option>
                    @foreach($rols as $id =>$name) {{--agarra en valor de la variable del controlador en el index --}}
                        <option
                            value="{{$id}}" {{old("rol_id", $Usuari->$id ?? "")==$id ? "selected" : ""}}>{{$name}}
                        </option>
                    @endforeach
            </select>
        </div>
   </div>
    

   {{-- apuntes 
     value="{{old('usuario', $Usuario->email ?? '')}}" -> ESto ees para recuperar datos del formulario para editar
     {{!isset($Usuario) ? 'required' : ''}}  -> esto hace que ya no sea requerido por lado del cliente en el formulario donde se esta llenado los datos
    class="{{!isset($Usuario)  -> esto hace que ya no sea requerido  en el formulario
     --}}