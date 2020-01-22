<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id')->on('rol')->onDelete('cascade')->defaul(1);
            $table->string('usuario',50)->unique();
            $table->string('nombre',30);
            $table->string('apellido',40);
            $table->string('email', 60)->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
