<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comentarios')->insert([
            'id' => 4010,
            'created_at' => '2018-09-17 15:35:29',
            'id_usuario' => 104,
            'texto' => 'Muito bom, adorei!',
            'id_envio' => 1010
        ]);

        DB::table('comentarios')->insert([
            'id' => 4011,
            'created_at' => '2018-09-20 15:35:29',
            'id_usuario' => 103,
            'texto' => 'Excelente conteúdo',
            'id_envio' => 1010
        ]);

        DB::table('comentarios')->insert([
            'id' => 4012,
            'created_at' => '2018-09-20 15:35:29',
            'id_usuario' => 105,
            'texto' => 'Canhão de pipoca',
            'id_envio' => 1012
        ]);
    }
}
