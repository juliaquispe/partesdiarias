<div class="card-header" style="background-color:rgb(105, 221, 154)">
    <h1 class="card-title"><font face="Cooper Black" size="5" color="#0E6654"><b>Datos Generales de la Infraccion</b></font></h1>
</div>
<div class="card-body" style="background-color: rgb(160, 226, 169)">
    <div class="col-sm-12">
        <input type="hidden" name="formulario_id" id="formulario_id" value={{$Formulario->id}}>
        <input type="hidden" name="personal_id" id="personal_id" value={{$Personal->id}}>
        <div class="form-group" > 
            <font color="#0E6642">
            <h5><b>Hora y Fecha de la Infraccion:</b></h5><br>
            Fecha:<input type="date" name="fecha" id="fecha" required>&nbsp;&nbsp;
            Hora Aproximada:<input type="time" name="hora" id="hora"><br><br>
            <h6><b>Datos del Lugar del Hecho</b></h6><br>
            Municipio: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Zona: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Distrito: <br>
                <select name="municipio" id="municipio" required autocomplete="on">
                    <option value="0">Seleccione...</option>
                    <option value="Sacaca">Sacaca</option>
                    <option value="Caripuyo">Caripuyo</option>
                    <option value="Uyuni">Uyuni</option>
                    <option value="Porco">Porco</option>
                    <option value="Tomave">Tomave</option>
                    <option value="Arampampa">Arampampa</option>
                    <option value="Acasio">Acasio</option>
                    <option value="San Pedro de Buena Vista">San Pedro de Buena Vista</option>
                    <option value="Toro Toro">Toro Toro</option>
                    <option value="Colquechaca">Colquechaca</option>
                    <option value="Ocurí">Ocurí</option>
                    <option value="Pocoata">Pocoata</option>
                    <option value="Ravelo">Ravelo</option>
                    <option value="Betanzos">Betanzos</option>
                    <option value="Chaquí">Chaquí</option>
                    <option value="Tacobamba">Tacobamba</option>
                    <option value="Llica">Llica</option>
                    <option value="Tahua">Tahua</option>
                    <option value="San Agustín">San Agustín</option>
                    <option value="Puna">Puna</option>
                    <option value="Caiza «D»">Caiza «D»</option>
                    <option value="Ckochas">Ckochas</option>
                    <option value="Villazón">Villazón</option>
                    <option value="Colcha «K»">Colcha «K»</option>
                    <option value="San Pedro de Quemes">San Pedro de Quemes</option>
                    <option value="Cotagaita">Cotagaita</option>
                    <option value="Vitichi ">Vitichi </option>
                    <option value="Uncía">Uncía</option>
                    <option value="Chayanta">Chayanta</option>
                    <option value="Llallagua">Llallagua</option>
                    <option value="Chuquiuta">Chuquiuta</option>
                    <option value="Tupiza">Tupiza</option>
                    <option value="Atocha">Atocha</option>
                    <option value="San Pablo de Lipez">San Pablo de Lipez</option>
                    <option value="Mojinete">Mojinete</option>
                    <option value="San Antonio de Esmoruco">San Antonio de Esmoruco</option>
                    <option value="Potosí">Potosí</option>
                    <option value="Belén de Urmiri ">Belén de Urmiri </option>
                    <option value="Tinguipaya">Tinguipaya</option>
                    <option value="Villa de Yocalla">Villa de Yocalla</option>
                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="zona" id="zona" autocomplete="on">
                    <option value="0">Seleccione...</option>
                    <option value="Cantumarca">Cantumarca</option>
                    <option value="Villa Copacabana">Villa Copacabana</option>
                    <option value="Las Delicias">Las Delicias</option>
                    <option value="San Benito">San Benito</option>
                    <option value="San Clemente">San Clemente</option>
                    <option value="Ciudad Satélite">Ciudad Satélite</option>
                    <option value="Plan 40">Plan 40</option>
                    <option value="San Gerardo">San Gerardo</option>
                    <option value="San Bernardo">San Bernardo</option>
                    <option value="Villa Venezuela">Villa Venezuela</option>
                    <option value="Casco Viejo Central">Casco Viejo Central</option>
                    <option value="Las Lecherias">Las Lecherias</option>
                    <option value="San Pedro">San Pedro</option>
                    <option value="Otro">Otro</option>
                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <select name="distrito" id="distrito" autocomplete="on">
                    <option value="0">Seleccione...</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="otro">otro</option>
                </select><br><br>
            <h5><b>Descripcion del Lugar del Hecho</b></h5><br>
                Calle o Avenida Principal: &nbsp;&nbsp;<input required autocomplete="on" type="text" size="30" name="callep" id="callep" placeholder="Ingrese la calle o avenida principal"><br><br>
                Calle o Avenida Secundaria:&nbsp;&nbsp;<input autocomplete="on" type="text" size="30"  name="calles" id="calles" placeholder="Ingrese la calle o avenida secundaria"><br><br>
                Lugar de Hecho:&nbsp;&nbsp;
                <select name="lugar_hecho" id="lugar_hecho" required autocomplete="on">
                    <option value="">Seleccione...</option>
                    <option value="Areas Publicas">Areas Publicas</option>
                    <option value="Areas Privadas">Areas Privadas</option>
                    <option value="Areas Dedicadas al Comercio">Areas Dedicadas al Comercio</option>
                    <option value="Centros de Diversion">Centros de Diversion</option>
                    <option value="Entidades Publicas">Entidades Publicas</option>
                    <option value="Instituciones de Salud">Instituciones de Salud</option>
                    <option value="Instituciones Educativas">Instituciones Educativas</option>
                    <option value="Lugares de Alimentacion">Lugares de Alimentacion</option>
                    <option value="Transporte">Transporte</option>
                    <option value="Viviendas/Alojamientos">Viviendas/Alojamientos</option>
                </select><br><br>
            Tramo/Carretera:&nbsp;&nbsp;    
                <select name="tramo" id="tramo" required autocomplete="on">
                    <option value="">Seleccione...</option>
                    <option value="Salida">Salida</option>
                    <option value="Llegada">Llegada</option>
                </select><br><br> 
            GPS Coordenadas:&nbsp;&nbsp;<input autocomplete="on" type="text" size="30" name="coordenadas" id="coordenadas" placeholder="Ingrese las coordenadas">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Area:&nbsp;&nbsp;   
                <select name="area" id="area" autocomplete="on">
                    <option value="">Seleccione...</option>
                    <option value="Urbana">Urbana</option>
                    <option value="Rural">Rural</option>
                </select><br><br>
            Clasificacion de Infraccion:&nbsp;&nbsp;  
                <select name="infraccion_de" id="infraccion_de" required autocomplete="on">
                    <option value="">Seleccione...</option>
                    <option value="Primer Grado">Primer Grado</option>
                    <option value="Segundo Grado">Segundo Grado</option>
                    <option value="Tercer Grado">Tercer Grado</option>
                    <option value="Infraccion a la Ley 259">Infraccion a la Ley 259</option> 
                </select><br><br> 
            Clasificacion de la Via:&nbsp;&nbsp;  
                <select name="tipo_via" id="tipo_via" autocomplete="on">
                    <option value="">Seleccione...</option>
                    <option value="Calle">Calle</option>
                    <option value="Avenida">Avenida</option>
                    <option value="Carretera">Carretera</option>
                </select><br><br> 
            <h5><b>Unidad de Transito</b></h5><br>
                A Cargo:&nbsp;&nbsp;    
                <select name="unidad_cargo" id="unidad_cargo" required autocomplete="on">
                    <option value="">Seleccione...</option>
                    <option value="EPI6">EPI6</option>
                    <option value="Transito Zona Sur">Transito Zona Sur</option>
                    <option value="Transito el Alto">Transito el Alto</option>
                    <option value="EPI Norte">EPI Norte</option>
                    <option value="Radio Patrulla 110">Radio Patrulla 110</option>
                    <option value="Transito Beni">Transito Beni</option>
                </select><br><br>                  
            <h5><b>Tipo de Denuncia:</b></h5><br> 
            Denuncia:&nbsp;&nbsp;  
                <select name="denuncia" id="denuncia" autocomplete="on">
                    <option value="">Seleccione...</option>
                    <option value="Oficio">Oficio</option>
                    <option value="Accion Directa">Accion Directa</option>
                    <option value="Escrita">Escrita</option>
                    <option value="Llamada">Llamada</option> 
                    <option value="Otro tipo">Otro tipo</option> 
                </select><br><br>   
            <h5><b>Datos del Infractor:</b></h5>
            Nombre Completo del Conductor:&nbsp;&nbsp;<input required autocomplete="on" type="text" size="25" name="nombres_infractor" id="nombres_infractor" placeholder="Juan Perez Olmedo..."><br><br>
            Genero: 
                    <div class="form-group col-lg-10">
                        <input type="radio" name="genero" id="genero" value="varon">
                            <label for="varon">Varon</label><br>
                        <input type="radio" name="genero"  id="genero" value="mujer">
                            <label for="mujer">Mujer</label>
                    </div>
            N<sup>ro</sup> de Licencia:&nbsp;&nbsp;<input autocomplete="on" type="text" size="15" name="nro_licencia" id="nro_licencia" placeholder="10477022"><br><br>
            Categoria de Licencia:&nbsp;&nbsp; 
                <select name="categoria" id="categoria" autocomplete="on">
                    <option value="">Seleccione...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="T">T</option>
                    <option value="M">M</option>
                </select><br><br>
            Edad:&nbsp;&nbsp;<input type="number" autocomplete="on" min="1" max="100" name="edad" id="edad">&nbsp;&nbsp;
            Grado Alcoholico:&nbsp;&nbsp;<input autocomplete="on" type="text" size="20" maxlength="15" name="g_alcoholico" id="g_alcoholico"><br><br>
            Infractor Arrestrado:&nbsp;&nbsp;
                <div class="form-group col-lg-10">
                    <input type="radio" name="infractor_arest" id="infractor_arest" value="si">
                    <label for="si">SI</label><br>
                    <input type="radio" name="infractor_arest"  id="infractor_arest" value="no">
                    <label for="no">No</label>
                </div>
            <h5><b>Acerca del Vehiculo</b></h5>
            Tipo de Vehiculo:&nbsp;&nbsp;<select name="tipo_vehiculo" id="tipo_vehiculo" required autocomplete="on">
                                    <option value="0">Seleccione...</option>
                                    <option value="Camioneta">Camioneta</option>
                                    <option value="Vagoneta">Vagoneta</option>
                                    <option value="Motocicleta">Motocicleta</option>
                                    <option value="Minibus">Minibus</option>
                                </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Placa:&nbsp;&nbsp;<input required type="text" size="20" name="placa" id="placa" autocomplete="on"><br><br>                    
            Tipo de Servio:<select name="t_servicio" id="t_servicio" autocomplete="on">
                                                <option value="0">Seleccione...</option>
                                                <option value="Publico">Publico</option>
                                                <option value="Privado">Privado</option>
                                                <option value="Oficial">Oficial</option>
                                                <option value="Otro">Otro</option>
                                            </select><br><br>
            <h5><b>Tipo de Castigo</b></h5>
                <div class="form-group col-lg-10">
                    <input type="radio" name="t_castigo" id="t_castigo" value="Sancion">
                    <label for="Sancion">Sancion</label><br>
                    <input type="radio" name="t_castigo"  id="t_castigo" value="Suspencion">
                    <label for="Suspencion">Suspencion</label>
                </div>
            Nombre Completo del Polocia (Accion Directa):&nbsp;&nbsp;<input required autocomplete="on" type="text" size="20" name="nombre_policia" id="nombre_policia" placeholder="Cabo Juan Arando"><br><br>
            Descripcion Detallada de la Infraccion (Informe):</font><textarea id="descripcion" name="descripcion" rows="5" cols="100" required></textarea>
        </div>
    </div>
</div>