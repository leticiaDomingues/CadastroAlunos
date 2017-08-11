<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->date('dataNasc');
            $table->smallInteger('serie');

            //endereco:
            $table->string('cep',8);
            $table->string('rua',120);
            $table->integer('numero');
            $table->string('complemento',50)->nullable();
            $table->string('bairro',100);
            $table->string('cidade',100);
            $table->string('estado',2);

            //dados da mae:
            $table->string('nomeMae',100);
            $table->string('cpfMae',11);
            $table->date('dataPagamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
