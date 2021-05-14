<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervenantInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenant_interventions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('intervenant_id');
            $table->unsignedBigInteger('intervention_id');
            $table->timestamps();

            $table->unique(['intervenant_id', 'intervention_id']);

            $table->foreign('intervenant_id')
                ->references('id')
                ->on('intervenants')
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
        Schema::dropIfExists('intervenant_interventions');
    }
}
