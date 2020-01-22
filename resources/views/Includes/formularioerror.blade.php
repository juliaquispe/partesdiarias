  
@if($errors->any()) <!--esta variable esta agarrando un falso o verdadero si la vvariable tiene error entra a esta funcion-->
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><!--es el boton para cerrar-->
        <h4><i class="icon fa fa-ban"></i> El fomurlario contiene errores</h4> <!--este es el icono del error-->
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li><!--muestra todos los errores-->
            @endforeach
        </ul>
    </div>
@endif