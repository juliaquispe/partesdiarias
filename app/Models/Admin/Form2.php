<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Form2 extends Model
{
    protected $table = "form2";
    protected $fillable= [
        'personal_id', 'formulario_id', 'fecha', 'hora', 'municipio', 'zona', 'distrito', 'callep', 'calles',
        'lugar_hecho', 'coordenadas', 'denuncia', 'nombres_infractor', 'genero', 'ci', 'expedida_en','edad',
        'nacionalidad', 'temperancia','estado_civil', 'ocupacion', 'infractor_arest', 'sancion', 'estado', 'descripcion'
    ];
}
