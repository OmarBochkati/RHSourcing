<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('nom_groupe');
            $table->unsignedBigInteger('id_createur');
            $table->foreign('id_createur')->references('id')->on('candidats');
            $table->unsignedBigInteger('id_membre');
            $table->foreign('id_membre')->references('id')->on('candidats');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupements');
    }
}
