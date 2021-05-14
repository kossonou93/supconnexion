<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule')->nullable();
            $table->string('etablissement')->nullable();
            $table->date('debut')->nullable();
            $table->date('fin')->nullable();
            $table->string('description')->nullable();
            $table->string('type_intervention')->nullable();
            $table->string('heure_intervention')->nullable();
            $table->string('niveau_participant')->nullable();
            $table->string('nombre_participant')->nullable();
            $table->string('support_intervention')->nullable();
            $table->string('autre')->nullable();
            $table->unsignedBigInteger('intervenant_id');
            $table->timestamps();

            $table->foreign('intervenant_id')
                ->references('id')
                ->on('intervenants')
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
        Schema::dropIfExists('experiences');
    }
}
