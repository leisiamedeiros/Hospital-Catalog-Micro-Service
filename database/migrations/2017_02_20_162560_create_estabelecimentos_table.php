<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnes', 7)->unique();
            $table->string('nome', 60);
            $table->string('razaoSocial', 100);
            $table->string('municipio', 6);
            $table->foreign('municipio')->references('codigo')->on('municipios')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->string('tipoGestao', 1);
            $table->foreign('tipoGestao')->references('codigo')->on('tipo_gestaos')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('atendeSus');
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
        Schema::dropIfExists('estabelecimentos');
    }
}
