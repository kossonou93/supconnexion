<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnonceLanguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonce_langues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('annonce_id');
            $table->unsignedBigInteger('langue_id');
            $table->timestamps();

            $table->unique(['annonce_id', 'langue_id']);

            $table->foreign('annonce_id')
                ->references('id')
                ->on('annonces')
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
        Schema::dropIfExists('annonce_langues');
    }
}
