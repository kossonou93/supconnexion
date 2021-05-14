<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcoleHorairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecole_horaires', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ecole_id');
            $table->unsignedBigInteger('horaire_id');
            $table->timestamps();

            $table->unique(['ecole_id', 'horaire_id']);

            $table->foreign('ecole_id')
                ->references('id')
                ->on('ecoles')
                ->onDelete('cascade');

            $table->foreign('horaire_id')
                ->references('id')
                ->on('horaires')
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
        Schema::dropIfExists('ecole_horaires');
    }
}
