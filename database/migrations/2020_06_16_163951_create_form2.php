<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm2 extends Migration
{
    public function up()
    {
        Schema::create('form2', function (Blueprint $table) {
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
            $table->string('coordenadas', 30)->nullable();
            $table->string('denuncia', 20);
            $table->string('nombres_infractor', 40);
            $table->string('genero',5);
            $table->string('ci', 15)->unique()->nullable();
            $table->string('expedida_en',20);
            $table->integer('edad');
            $table->string('nacionalidad',15)->nullable();
            $table->string('temperancia',20);
            $table->string('estado_civil',15)->nullable();
            $table->string('ocupacion', 20)->nullable();
            $table->string('infractor_arest',2);
            $table->string('sancion', 30)->nullable();
            $table->string('estado', 17);
            $table->text('descripcion');
            $table->charset = 'utf8mb4';
            $table->collation ='utf8mb4_spanish_ci';
            $table->timestamps();
    
        });
    }
    public function down()
    {
        Schema::dropIfExists('form2');
    }
}
