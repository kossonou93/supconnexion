<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_interventions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('annonce_id');
            $table->unsignedBigInteger('intervention_id');
            $table->timestamps();

            $table->unique(['annonce_id', 'intervention_id']);

            $table->foreign('annonce_id')
                ->references('id')
                ->on('annonces')
                ->onDelete('cascade');
                
            $table->foreign('intervention_id')
                ->references('id')
                ->on('interventions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annonce_interventions');
    }
}
