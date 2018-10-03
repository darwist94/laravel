<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
        	'name'			=> 'Leer',
        	'slug'			=> 'permitir.leer',
        	'description'	=> 'Permiso para leer',
        ]);

        Permission::create([
            'name'          => 'Agregar',
            'slug'          => 'permitir.crear',
            'description'   => 'permiso para Agregar',
        ]);

        Permission::create([
            'name'          => 'Editar',
            'slug'          => 'permiso.editar',
            'description'   => 'permiso de editor',
        ]);

        Permission::create([
            'name'          => 'Actualizar',
            'slug'          => 'permitir.actualizar',
            'description'   => 'permiso para actualizar',
        ]);

        Permission::create([
            'name'          => 'Eliminar',
            'slug'          => 'permitir.eliminar',
            'description'   => 'permiso de eliminar',
        ]);


        
    
    }
}
