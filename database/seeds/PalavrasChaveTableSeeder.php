<?php

use Illuminate\Database\Seeder;

class PalavrasChaveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('palavrasChave')->insert([
            'id' => 107,
            'palavra' => 'geografia',
            'envio' => 1010,
            'created_at' => now()
        ]);

        DB::table('palavrasChave')->insert([
            'id' => 108,
            'palavra' => 'geologia',
            'envio' => 1010,
            'created_at' => now()
        ]);

        DB::table('palavrasChave')->insert([
            'id' => 109,
            'palavra' => 'erosão',
            'envio' => 1010,
            'created_at' => now()
        ]);

        DB::table('palavrasChave')->insert([
            'id' => 1015,
            'palavra' => 'logaritmo',
            'envio' => 1012,
            'created_at' => now()
        ]);

        DB::table('palavrasChave')->insert([
            'id' => 1017,
            'palavra' => 'funções',
            'envio' => 1012,
            'created_at' => now()
        ]);
    }
}
