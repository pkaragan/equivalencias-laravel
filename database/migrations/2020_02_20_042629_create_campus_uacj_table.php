<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusUacjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campus_uacj', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('iniciales')->nullable();
            $table->string('estado');
            $table->string('ciudad');
            $table->string('calle')->nullable();
            $table->integer('numero')->nullable();
            $table->string('numero_int')->nullable();
            $table->string('colonia')->nullable();
            $table->integer('cp')->nullable();
            $table->string('telefono')->nullable();
            $table->string('ext')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campus_uacj');
    }
}
