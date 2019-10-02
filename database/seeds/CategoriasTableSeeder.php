<?php

use Illuminate\Database\Seeder;
use App\Categoria;



class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create([
            'categoria'=> 'moda',
        ]);

        Categoria::create([
            'categoria'=> 'tecnologia',
        ]);

        Categoria::create([
            'categoria'=> 'esportes',
        ]);

        Categoria::create([
            'categoria'=> 'cinema',
        ]);

        Categoria::create([
            'categoria'=> 'automobilismo',
        ]);
    }
}
