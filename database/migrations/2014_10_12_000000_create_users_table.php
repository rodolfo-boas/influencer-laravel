<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Symfony\Component\Console\Helper\Table;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sobrenome')->nullable();
            $table->string('contato', 11)->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('seguidores')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('CPF', 11)->unique()->nullable();
            $table->string('CNPJ', 14)->unique()->nullable();
            $table->string('URL')->nullable();
            $table->string('estado')->unique()->nullable();
            $table->string('genero')->unique()->nullable();
            $table->string('tipo_cliente')->nullable();
            $table->unsignedBiginteger('id_categoria')->nullable();
            // $table->foreign('id_categoria')->references('id')->on('categorias'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
