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
            'descricao' => 'Ajuda com a fórmula de Baskara e raiz de Delta!',
            'classificacao' => 4.7,
            'created_at' => now(),
            'categoria' => 1
        ]);

        DB::table('grupos')->insert([
            'id' => 1021,
            'nome' => 'Grupo de Bio II',
            'descricao' => 'Estou com duas coletas de amostra mas não consigo diferenciar ... ',
            'classificacao' => 3.5,
            'created_at' => now(),
            'categoria' => 3
        ]);

        DB::table('grupos')->insert([
            'id' => 1023,
            'nome' => 'Grupo de Filosofia',
            'descricao' => 'Qual a similaridade entre o pensamento de Aris...',
            'classificacao' => 2.4,
            'created_at' => now(),
            'categoria' => 2
        ]);

        DB::table('grupos')->insert([
            'id' => 1022,
            'nome' => 'Grupo de Literatura',
            'descricao' => 'Vida e obra de Camões',
            'classificacao' => 2.4,
            'created_at' => now(),
            'categoria' => 2
        ]);

        DB::table('grupos')->insert([
            'id' => 1024,
            'nome' => 'Grupo de Laravel',
            'descricao' => 'Debate sobre o framework',
            'classificacao' => 2.4,
            'created_at' => now(),
            'categoria' => 1
        ]);

        DB::table('grupos')->insert([
            'id' => 1025,
            'nome' => 'Grupo de Medicina',
            'descricao' => 'Estudos sobre Anatomia',
            'classificacao' => 4.9,
            'created_at' => now(),
            'categoria' => 3
        ]);

        DB::table('grupos')->insert([
            'id' => 1026,
            'nome' => 'Grupo de Java Avançado',
            'descricao' => 'Java para profissionais',
            'classificacao' => 4.1,
            'created_at' => now(),
            'categoria' => 1
        ]);
    }
}
