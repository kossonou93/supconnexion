<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervenantDisposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenant_dispos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('intervenant_id');
            $table->unsignedBigInteger('dispo_id');
            $table->timestamps();

            $table->unique(['intervenant_id', 'dispo_id']);

            $table->foreign('intervenant_id')
                ->references('id')
                ->on('intervenants')
                ->onDelete('cascade');

            $table->foreign('dispo_id')
                ->references('id')
                ->on('disponibilites')
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
        Schema::dropIfExists('intervenant_dispos');
    }
}
