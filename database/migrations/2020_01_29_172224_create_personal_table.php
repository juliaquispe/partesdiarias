<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalTable extends Migration
{
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->increments('id');
            $table->string('item', 5)->unique()->nullable();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('ci', 20)->unique();
            $table->string('celular', 30)->unique()->nullable();
            $table->string('cargo', 60);
            $table->date('fecha_nac');
            $table->integer('unidad_id')->unsigned();
            $table->foreign('unidad_id')->references('id')->on('unidad')->onDelete('restrict');
            $table->string('foto',10)->nullable();
            $table->string('sexo',9);
            $table->charset = 'utf8mb4';
            $table->collation ='utf8mb4_spanish_ci';
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('personal');
    }
}
