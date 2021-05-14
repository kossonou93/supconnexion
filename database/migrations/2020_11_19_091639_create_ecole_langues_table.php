<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcoleLanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecole_langues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ecole_id');
            $table->unsignedBigInteger('langue_id');
            $table->timestamps();

            $table->unique(['ecole_id', 'langue_id']);

            $table->foreign('ecole_id')
                ->references('id')
                ->on('ecoles')
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
        Schema::dropIfExists('ecole_langues');
    }
}
