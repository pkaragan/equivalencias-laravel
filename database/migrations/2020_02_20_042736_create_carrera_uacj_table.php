<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarreraUacjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carrera_uacj', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('campus_uacj_id')->unsigned();
            $table->string('nombre');
            $table->timestamps();

            $table->foreign('campus_uacj_id')->references('id')->on('campus_uacj')
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
        Schema::dropIfExists('carrera_uacj');
    }
}
