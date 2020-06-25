<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Form3 extends Model
{
    protected $table = "form3";
    protected $fillable= [
        'personal_id', 'formulario_id', 'fecha', 'hora', 'municipio', 'zona', 'distrito', 'callep', 'calles',
        'lugar_hecho', 'tramo', 'coordenadas','area', 'infraccion_de', 'tipo_via', 'unidad_cargo', 'denuncia',
        'nombres_infractor', 'genero', 'nro_licencia', 'categoria', 'edad', 'g_alcoholico', 'infractor_arest',
        'tipo_vehiculo', 'placa', 't_servicio', 't_castigo', 'nombre_policia', 'descripcion'
    ];
}
