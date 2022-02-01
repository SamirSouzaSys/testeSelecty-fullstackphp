<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacaoAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacao_academicas', function (Blueprint $table) {
            $table->id();
            $table->string('instituicao');
            $table->string('grau');
            $table->date('inicio');
            $table->date('fim');
            $table->text('descricao_richtext');
            $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade')->onUpdate('cascade');

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
        Schema::dropIfExists('formacao_academicas');
    }
}
