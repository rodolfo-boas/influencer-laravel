<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampanhaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanha', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('descricao');
            $table->string('img_campanha');
            $table->date('data_inicial');
            $table->date('data_final');

            $table->unsignedBigInteger('marca_category_id');
            $table->foreign("marca_category_id")->references('id')->on('marca');

            $table->unsignedBigInteger('influenciador_Id_influencer');
            $table->foreign('influenciador_Id_influencer')->referencers('id')->on('influenciador');

            $table->unsignedBigInteger('categorias_id_categoria');
            $table->foreign('categorias_id_categoria')->references('id')->on('categorias');

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
        Schema::dropIfExists('campanha');
    }
}
