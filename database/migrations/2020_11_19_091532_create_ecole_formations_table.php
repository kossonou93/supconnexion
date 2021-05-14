<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcoleFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecole_formations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('ecole_id');
            $table->unsignedBigInteger('formation_id');
            $table->timestamps();

            $table->unique(['ecole_id', 'formation_id']);

            $table->foreign('ecole_id')
                ->references('id')
                ->on('ecoles')
                ->onDelete('cascade');
            $table->foreign('formation_id')
                ->references('id')
                ->on('type_formations')
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
        Schema::dropIfExists('ecole_formations');
    }
}
