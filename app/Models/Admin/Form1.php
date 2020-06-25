<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Form1 extends Model
{
    protected $table = "form1";
    protected $fillable= [
        'fecha', 'hora', 'municipio', 'zona', 'distrito', 'callep', 'calles', 'coordenadas', 'nombres_auxiliado',
        'ci', 'nacido_en', 'edad', 'genero', 'nombre_policia', 'lugar_hecho','descripcion','personal_id','formulario_id'
    ];
}
