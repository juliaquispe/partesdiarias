<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm3 extends Migration
{
    public function up()
    {
        Schema::create('form3', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('personal_id')->unsigned();
            $table->foreign('personal_id')->references('id')->on('personal')->onDelete('restrict');
            $table->integer('formulario_id')->unsigned();
            $table->foreign('formulario_id')->references('id')->on('formulario')->onDelete('restrict');
            $table->date('fecha');
            $table->time('hora')->nullable();
            $table->string('municipio', 50);
            $table->string('zona', 40)->nullable();
            $table->string('distrito', 4)->nullable();
            $table->string('callep', 35);
            $table->string('calles', 35)->nullable();
            $table->string('lugar_hecho', 30);
            $table->string('tramo', 15);
            $table->string('coordenadas', 30)->nullable();
            $table->string('area', 15);
            $table->string('infraccion_de',20);
            $table->string('tipo_via',15)->nullable();
            $table->string('unidad_cargo', 20);
            $table->string('denuncia', 20);            
            $table->string('nombres_infractor', 40);
            $table->string('genero',5);
            $table->string('nro_licencia', 15)->unique()->nullable();
            $table->string('categoria',15)->nullable();
            $table->integer('edad');
            $table->string('g_alcoholico',15)->nullable();
            $table->string('infractor_arest',2);
            $table->string('tipo_vehiculo',20);
            $table->string('placa',20);
            $table->string('t_servicio',15)->nullable();
            $table->string('t_castigo',10);
            $table->string('nombre_policia', 40);
            $table->text('descripcion');
            $table->charset = 'utf8mb4';
            $table->collation ='utf8mb4_spanish_ci';
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('form3');
    }
}
