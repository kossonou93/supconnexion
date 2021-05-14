<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervenantLanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenant_langues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('intervenant_id');
            $table->unsignedBigInteger('langue_id');
            $table->timestamps();

            $table->unique(['intervenant_id', 'langue_id']);

            $table->foreign('intervenant_id')
                ->references('id')
                ->on('intervenants')
                ->onDelete('cascade');

            $table->foreign('langue_id')
                ->references('id')
                ->on('langues')
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
        Schema::dropIfExists('intervenant_langues');
    }
}
