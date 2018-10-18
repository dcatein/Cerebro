<?php

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grupos')->insert([
            'id' => 1020,
            'nome' => 'Grupo de Mat III',
            'classificacao' => 4.7,
            'created_at' => now()
        ]);

        DB::table('grupos')->insert([
            'id' => 1021,
            'nome' => 'Grupo de Bio II',
            'classificacao' => 3.5,
            'created_at' => now()
        ]);

        DB::table('grupos')->insert([
            'id' => 1022,
            'nome' => 'Grupo de Filosofia',
            'classificacao' => 2.4,
            'created_at' => now()
        ]);
    }
}
