<?php

use Illuminate\Database\Seeder;

class EnviosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('envios')->insert([
            'id' => 1010,
            'assunto' => 'Geografia',
            'tipo' => 0,
            'info' => 'Exercicio sobre geologia',
            'classificacao' => 4.2,
            'created_at' => now()
        ]);

        DB::table('envios')->insert([
            'id' => 1012,
            'assunto' => 'Matematica',
            'tipo' => 0,
            'info' => 'Exercicio sobre algebra',
            'classificacao' => 3.8,
            'created_at' => now()
        ]);
    }
}
