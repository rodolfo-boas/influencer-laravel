<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfluenciadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('influenciador', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome_influencer');
            $table->string('url')->unique();
            $table->integer('cpf',11)->unique();
            $table->string('login_influenciador');
            $table->string('senha');

            $table->unsignedBigInteger('estado_id_estado');
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
        Schema::dropIfExists('influenciador');
    }
}
