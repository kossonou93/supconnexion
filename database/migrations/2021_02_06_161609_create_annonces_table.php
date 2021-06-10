<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('intitule')->nullable();
            $table->string('description')->nullable();
            $table->date('date_limite')->nullable();
            $table->unsignedBigInteger('ecole_id');
            $table->date('date_limite')->nullable();
            $table->longText('image')->nullable();
            $table->timestamps(); 
            
            $table->foreign('ecole_id')
                ->references('id')
                ->on('ecoles')
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
        Schema::dropIfExists('annonces');
    }
}
