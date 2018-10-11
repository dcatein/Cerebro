<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            'id' => 101,
            'nome' => 'Davidson',
            'email' => 'davidson@gmail.com',
            'senha' => 'dav',
            'idade' => '25',
            'created_at' => now()
        ]);

        DB::table('usuarios')->insert([
            'id' => 102,
            'nome' => 'Giovanna',
            'email' => 'giovanna@gmail.com',
            'senha' => 'gio',
            'idade' => '22',
            'created_at' => now()
        ]);

        DB::table('usuarios')->insert([
            'id' => 103,
            'nome' => 'Glaziele',
            'email' => 'glaziele@gmail.com',
            'senha' => 'gla',
            'idade' => '30',
            'created_at' => now()
        ]);

        DB::table('usuarios')->insert([
            'id' => 104,
            'nome' => 'Rayssa',
            'email' => 'rayssa@gmail.com',
            'senha' => 'ray',
            'idade' => '22',
            'created_at' => now()
        ]);

        DB::table('usuarios')->insert([
            'id' => 105,
            'nome' => 'Natan',
            'email' => 'natan@gmail.com',
            'senha' => 'nat',
            'idade' => '24',
            'created_at' => now()
        ]);

        DB::table('usuarios')->insert([
            'id' => 106,
            'nome' => 'Vinicius',
            'email' => 'vinicius@gmail.com',
            'senha' => 'vin',
            'idade' => '24',
            'created_at' => now()
        ]);
    }
}
