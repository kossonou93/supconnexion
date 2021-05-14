<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEcolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ecoles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact')->nullable();
            $table->unsignedBigInteger('ville_id')->nullable();
            //$table->unsignedBigInteger('commune_id')->nullable();
            $table->unsignedBigInteger('pays_id')->nullable();
            $table->string('about')->nullable();
            $table->string('token');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('ville_id')
                ->references('id')
                ->on('villes')
                ->onDelete('cascade');

            $table->foreign('pays_id')
                ->references('id')
                ->on('pays')
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
        Schema::dropIfExists('ecoles');
    }
}
