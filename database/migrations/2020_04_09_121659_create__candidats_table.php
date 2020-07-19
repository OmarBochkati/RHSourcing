<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();


            $table->binary('photo_profil');
            $table->date('date_nais');
            $table->string('num_portable');
            $table->string('email');
            $table->string('adresse');
            $table->string('genre');
            $table->string('profession');
            $table->text('description');
            $table->float('salaire');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('restrict')
                ->onUpdate('restrict');;


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('candidats', function(Blueprint $table) {
            $table->dropForeign('candidats_id_user_foreign');});
        Schema::dropIfExists('candidats');
    }
}
