<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nome'=> 'juliano',
            'sobrenome'=> 'juliano',
            'email'=> 'juliano@gmail.com',
            'password'=> bcrypt('juliano'),
            'CPF'=> 'juliano',
            'CNPJ'=> 'juliano',
            'URL'=> 'juliano',
            'estado'=> 'juliano',
            'genero'=> 'juliano',
            'tipo_cliente'=> 'influencer',
            'id_categoria'=> 1
        ]);

        User::create([
            'nome'=> 'arthur',
            'sobrenome'=> 'arthur',
            'email'=> 'arthur@gmail.com',
            'password'=> bcrypt('arthur'),
            'CPF'=> 'arthur',
            'CNPJ'=> 'arthur',
            'URL'=> 'arthur',
            'estado'=> 'arthur',
            'genero'=> 'arthur',
            'tipo_cliente'=> 'marca',
            'id_categoria'=> 1
        ]);
    }
}
