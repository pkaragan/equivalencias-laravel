<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('iniciales')->nullable();
            $table->string('estado');
            $table->string('ciudad');
            $table->string('calle')->nullable();
            $table->integer('numero')->nullable();
            $table->string('numero-int')->nullable();
            $table->string('colonia')->nullable();
            $table->integer('cp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('ext')->nullable();
            $table->bigInteger('universidad_id')->unsigned();
            $table->timestamps();

            $table->foreign('universidad_id')->references('id')->on('universidad')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campus');
    }
}
