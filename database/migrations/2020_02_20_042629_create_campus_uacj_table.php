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
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('iniciales')->nullable();
            $table->string('estado');
            $table->string('ciudad');
            $table->string('calle')->nullable();
            $table->string('numero')->nullable();
            $table->integer('cp')->nullable();
            $table->string('telefono')->nullable();
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
