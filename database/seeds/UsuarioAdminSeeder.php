<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        
        	'usuario'=>'julia',
        	'nombre'=>'julia',
        	'apellido'=>'quispe',
        	'email'=>'quispe@gmail.com',
        	'password'=>bcrypt('julia')
        ]);

         DB::table('permiso')->insert([
        	'usuario_id'=>1,
        	'add'=>1,
        	'edit'=>1,
        	'remove'=>1
        ]); 

        DB::table('permiso')->insert([
        	'usuario_id'=>2,
        	'add'=>1,
        	'edit'=>1,
        	'remove'=>0,
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

        DB::table('formulario')->insert([
        
        	'nombre'=>'Formulario de Auxilios',
        	'codigo'=>'FORM.01',
        	'descripcion'=>'Se encuentran  los registro de las personas que fueron auxiliados'
        ]);

        DB::table('formulario')->insert([
        
        	'nombre'=>'Formulario de Casos Atendidos de Faltas y Contravenviones Policiales',
        	'codigo'=>'FORM.02',
        	'descripcion'=>'Se encuentran  los casos de Faltas y Contravenviones Policial atendidas'
        ]);

        DB::table('formulario')->insert([
        
        	'nombre'=>'Formulario de Infracciones de Transito',
        	'codigo'=>'FORM.03',
        	'descripcion'=>'Se encuentran  las infraccionesde transito atendidas'
        ]);
    }
}
