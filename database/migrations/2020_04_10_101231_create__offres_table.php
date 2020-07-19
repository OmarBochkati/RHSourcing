<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('titre_emploi');
            $table->string('secteur_emploi');
            $table->text('description');
            $table->date('date_publication');
            $table->date('date_limite');
            $table->string('mail_recreuteur');
            $table->float('salaire_propose');
            $table->string('ville');
            $table->float('paiment');
            $table->unsignedBigInteger('id_entreprise');
            $table->foreign('id_entreprise')->references('id')->on('entreprises');
            $table->unsignedBigInteger('id_quizz');
            $table->foreign('id_quizz')->references('id')->on('quizzs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offres');
    }
}
