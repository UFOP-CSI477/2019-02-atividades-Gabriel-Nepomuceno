<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('aluno_id');
            $table->integer('professor_id');
            $table->string('titulo',100);
            $table->integer('ano');
            $table->tinyInteger('semestre');

            $table->timestamps();

            $table->foreign('aluno_id')
                ->references('id')->on('alunos');
            $table->foreign('professor_id')
                ->references('id')->on('professors');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
