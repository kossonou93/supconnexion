<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcoleDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecole_disciplines', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ecole_id');
            $table->unsignedBigInteger('discipline_id');
            $table->timestamps();

            $table->unique(['ecole_id', 'discipline_id']);

            $table->foreign('ecole_id')->references('id')->on('ecoles')->onDelete('cascade');

            $table->foreign('discipline_id')->references('id')->on('disciplines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ecole_disciplines');
    }
}
