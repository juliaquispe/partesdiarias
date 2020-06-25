<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForm1 extends Migration
{
    public function up()
    {
        Schema::create('form1', function (Blueprint $table) {
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
            $table->string('coordenadas', 30)->nullable();
            $table->string('nombres_auxiliado', 40);
            $table->string('ci', 15)->unique()->nullable();
            $table->string('nacido_en', 20)->nullable();
            $table->integer('edad')->nullable();
            $table->string('genero',5);
            $table->string('nombre_policia', 40);
            $table->string('lugar_hecho', 40);
            $table->text('descripcion');
            $table->charset = 'utf8mb4';
            $table->collation ='utf8mb4_spanish_ci';
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('form1');
    }
}
