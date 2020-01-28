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

        DB::table('rol')->insert([
        	'name'=>'usuario'
        ]);


         DB::table('usuario')->insert([
        
        	'usuario'=>'admin',
        	'nombre'=>'kato',
        	'apellido'=>'parra',
        	'email'=>'parra@gmail.com',
        	'password'=>bcrypt('admin')
        ]);

        DB::table('usuario')->insert([
        
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

        DB::table('usuario_rol')->insert([
            'rol_id'=>'1',
            'usuario_id'=>'1',
            'estado'=>'1'
           
        ]);

        DB::table('usuario_rol')->insert([
            'rol_id'=>'2',
            'usuario_id'=>'2',
            'estado'=>'0'
           
        ]);
    }
}
