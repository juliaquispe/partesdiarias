<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Unidad;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class Personal extends Model
{
    protected $table = "personal";
    protected $fillable= [
        'nombre', 'apellido', 'ci', 'celular', 'cargo', 'fecha_nac', 'unidad_id', 'sexo', 'foto'
    ]; //PARA LLENAR DESDE UN FORMULARIO
  
    public function unidad()
    {
        return $this->belongsTo(Unidad::class); //MUCHOS PERSONALES PERTENECEN A UNA UNIDAD
    }

    public static function setFoto($foto, $actual = false) //fotoo(al crear) y actual (al editar)
    {
        if($foto) {
            if($actual){
                Storage::disk('public')->delete("Datos/Fotos/Personal/$actual"); //si es la actual borra la fto anterior
            }
            $Nombre =Str::random(5). '.jpg'; //Str es para lla,mar a random que crea un nombre aleatorio de 10 carracteres
            $Imagen = image::make($foto)->encode('jpg', 75); //codifica con la extension jpgcon un75% de la imagen real
            $Imagen->resize(500, 550, function ($constraint){ //redirecciona el tamaño de la foto
                $constraint->upsize();
            });
            Storage::disk('public')->put("Datos/Fotos/Personal/$Nombre", $Imagen-> stream()); // guarda la imagen en esta ruta
            return $Nombre; // retorna el nombre de la imagen
        } else{
            return false;
        }
    }
    
}
