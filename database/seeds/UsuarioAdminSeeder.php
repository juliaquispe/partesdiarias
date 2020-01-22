<?php

use Illuminate\Database\Seeder;

class UsuarioAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->insert([
        	'name'=>'administrador'
        ]);

         DB::table('usuario')->insert([
        	'id_rol'=>1,
        	'usuario'=>'julis',
        	'nombre'=>'julia',
        	'apellido'=>'quispe',
        	'email'=>'quispe@gmail.com',
        	'password'=>bcrypt('julia')
        ]);

         DB::table('permiso')->insert([
        	'id_usuario'=>1,
        	'add'=>1,
        	'edit'=>1,
        	'remove'=>0
        ]); 

         DB::table('unidad')->insert([
            'nombre'=>'Comando',
            'descripcion'=>'Comando Departamental',
            'sigla'=>'C'
           
        ]); 
    }
}
