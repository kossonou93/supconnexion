<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervenants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('ville_id')->nullable();
            $table->unsignedBigInteger('pays_id')->nullable();
            $table->string('phone')->nullable();
            $table->string('contact')->nullable();
            $table->string('last_name')->nullable();
            $table->date('birth_day')->nullable();
            $table->string('fonction')->nullable();
            $table->string('sexe')->nullable();
            $table->longText('photo')->nullable();
            $table->longText('cv')->nullable();
            $table->longText('linkdin')->nullable();
            $table->longText('motivation')->nullable();
            $table->longText('competence')->nullable();
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
        Schema::dropIfExists('intervenants');
    }
}
