<?php

use Illuminate\Database\Seeder;

class GruposUsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos_usuarios')->insert([
            'id' => 2020,
            'id_usuario' => 105,
            'categoria' => 1020
        ]);
        
        DB::table('grupos_usuarios')->insert([
            'id' => 2021,
            'id_usuario' => 105,
            'categoria' => 1021
        ]);

        DB::table('grupos_usuarios')->insert([
            'id' => 2022,
            'id_usuario' => 104,
            'categoria' => 1020
        ]);

        DB::table('grupos_usuarios')->insert([
            'id' => 2022,
            'id_usuario' => 104,
            'categoria' => 1023
        ]);
    }
}
