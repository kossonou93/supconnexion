<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('montant_initial');
            $table->string('montant_final');
            $table->string('etat');
            $table->unsignedBigInteger('ecole_id');
            $table->unsignedBigInteger('admin_id')->default(1);
            $table->timestamps();

            $table->foreign('ecole_id')
                ->references('id')
                ->on('ecoles')
                ->onDelete('cascade');

            $table->foreign('admin_id')
                ->references('id')
                ->on('admins')
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
        Schema::dropIfExists('transactions');
    }
}
