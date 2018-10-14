<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,1)->create();

        App\User::create([
            'name'          => 'Darwist Garcia',
            'email'          => 'darwistgtorres.26@gmail.com',
            'password'   =>bcrypt('admin123'),
        ]);

        Role::create([
        	'name'			=> 'Admin',
        	'slug'			=> 'admin',
            'description'   =>'super Rol',
        	'special'		=> 'all-access',
        ]);
    }
}
