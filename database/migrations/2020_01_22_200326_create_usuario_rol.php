<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('usuario_rol', function (Blueprint $table) {
        // $table->increments('id');
        // $table->unsignedInteger('id_rol')->unsigned();
        // $table->foreign('id_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict')->defaul(1);
        // $table->unsignedInteger('id_usuario')->unsigned();
        // $table->foreign('id_usuario')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict')->defaul(1);
        // $table->string('estado',50);
        // $table->timestamps();

        $table->unsignedInteger('rol_id');
        $table->foreign('rol_id', 'fk_usuariorol_rol')->references('id')->on('rol')->onDelete('restrict')->onUpdate('restrict');
        $table->unsignedInteger('usuario_id');
        $table->foreign('usuario_id', 'fk_usuariorol_usuario')->references('id')->on('usuario')->onDelete('cascade')->onUpdate('restrict');
        $table->string('estado')->nullable();
        $table->charset = 'utf8mb4';
        $table->collation = 'utf8mb4_spanish_ci';
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_rol');
    }
}
