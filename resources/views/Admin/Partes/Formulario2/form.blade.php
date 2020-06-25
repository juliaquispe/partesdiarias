<div class="card-header" style="background-color:rgb(105, 221, 154)">
    <h1 class="card-title"><font face="Cooper Black" size="5" color="#0E6654"><b>Datos Generales del Hecho</b></font></h1>
</div>
<div class="card-body" style="background-color: rgb(160, 226, 169)">
    <div class="col-sm-12">
        <input type="hidden" name="formulario_id" id="formulario_id" value={{$Formulario->id}}>
        <input type="hidden" name="personal_id" id="personal_id" value={{$Personal->id}}>
        <div class="form-group"> 
            <font color="#0E6642">
            <h5><b>Hora y Fecha del Hecho:</b></h5><br>
                Fecha:<input type="date" name="fecha" id="hora" required>&nbsp;&nbsp;
                Hora Aproximada:<input type="time" name="hora" id="hora"><br><br>
                <h6><b>Datos del Lugar del Hecho</b></h6><br>
                Municipio: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Zona: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Distrito: <br>
                    <select name="municipio" id="municipio" required >
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
                    <select name="zona" id="zona">
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
                    <select name="distrito" id="distrito" >
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
                Calle o Avenida Principal: &nbsp;&nbsp;<input required type="text" size="30" name="callep" id="callep" placeholder="Ingrese la calle o avenida principal"><br><br>
                Calle o Avenida Secundaria:&nbsp;&nbsp;<input type="text" size="30"  name="calles" id="calles" placeholder="Ingrese la calle o avenida secundaria"><br><br>
                Lugar de Hecho:&nbsp;&nbsp;
                    <select name="lugar_hecho" id="lugar_hecho" required>
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
            <h6><b>GPS Coordenadas:</b></h6> &nbsp;&nbsp;<input type="text" size="30" name="coordenadas" id="coordenadas" placeholder="Ingrese las coordenadas"><br><br>
            <h5><b>Tipo de Denuncia:</b></h5><br> 
                Denuncia:&nbsp;&nbsp;
                    <select name="denuncia" id="denuncia" required>
                        <option value="">Seleccione...</option>
                        <option value="Oficio">Oficio</option>
                        <option value="Accion Directa">Accion Directa</option>
                        <option value="Escrita">Escrita</option>
                        <option value="Llamada">Llamada</option>
                        <option value="Otro Tipo">Otro Tipo</option>
                    </select><br><br>
            <h5><b>Datos del Infractor:</b></h5>
                Nombre y Apellido:&nbsp;&nbsp;<input required maxlength="40" type="text" size="25" name="nombres_infractor" id="nombres_infractor" placeholder="Juan Perez Olmedo..." autocomplete="on"><br><br>
                Genero: 
                    <div class="form-group col-lg-10">
                        <input type="radio" name="genero" id="genero" value="varon">
                            <label for="varon">Varon</label><br>
                        <input type="radio" name="genero"  id="genero" value="mujer">
                            <label for="mujer">Mujer</label>
                    </div>
                N<sup>ro</sup> CI:&nbsp;&nbsp;<input type="text" minlength="6" maxlength="15" size="20" name="ci" id="ci" placeholder="Introduzca su ci">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Expedida en:&nbsp;&nbsp;
                    <select name="expedida_en" id="expedida_en" required>
                        <option value="">Seleccione...</option>
                        <option value="Potosi">Potosi</option>
                        <option value="Oruro">Oruro</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Cochabamba">Cochabamba</option>
                        <option value="Tarija">Tarija</option>
                        <option value="La Paz">La Paz</option>
                        <option value="Beni">Beni</option>
                        <option value="Pando">Pando</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                        <option value="Otro">Otro</option>
                    </select><br><br>
                Edad:&nbsp;&nbsp;<input type="number" min="1" max="100" name="edad" id="edad">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Nacionalidad:&nbsp;&nbsp;<input type="text" size="15" name="nacionalidad" id="nacionalidad" maxlength="20" maxlength="15" placeholder=" Ejm: Bolivian@"><br><br>
                Temperancia:&nbsp;&nbsp;
                    <select name="temperancia" id="temperancia" required>
                        <option value="0">Seleccione...</option>
                        <option value="Sobrio">Sobrio</option>
                        <option value="Etílico">Etílico</option>
                        <option value="Sustancia Química">Sustancia Química</option>
                        <option value="Desconocidos">Desconocidos</option>
                    </select><br><br>
                Estado Civil:&nbsp;&nbsp;
                <select name="estado_civil" id="estado_civil">
                    <option value="">Seleccione...</option>
                    <option value="Soltero/a">Soltero/a</option>
                    <option value="Casado/a">Casado/a</option>
                    <option value="Viudo/a">Viudo/a</option>
                    <option value="Concubino/a">Concubino/a</option>
                </select><br><br>
                Profesion/Ocupacion:&nbsp;&nbsp;<input type="text" size="30" name="ocupacion" id="ocupacion" placeholder="Ejm: Profesor"><br><br>
                Infractor Arrestrado:
                    <div class="form-group col-lg-10">
                        <input type="radio" name="infractor_arest" id="infractor_arest" value="si">
                        <label for="si">SI</label><br>
                        <input type="radio" name="infractor"  id="infractor" value="no">
                        <label for="no">No</label>
                    </div>
                Sancion:&nbsp;&nbsp;
                    <select name="sancion" id="sancion">
                        <option value="0">Seleccione...</option>
                        <option value="Permanencia en Resisnto Policial">Permanencia en Resisnto Policial</option>
                        <option value="Permanencia su Hoga">Permanencia su Hoga</option>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Estado de Caso:&nbsp;&nbsp;
                    <select name="estado" id="estado" required>
                        <option value="0">Seleccione...</option>
                        <option value="En Investigacion">En Investigacion</option>
                        <option value="Concluido">Concluido</option>
                    </select><br><br>
                Descripcion Detallada del Parte (Informe):</font><textarea id="descripcion" name="descripcion" rows="5" cols="100" required></textarea>
        </div>
    </div>
</div>