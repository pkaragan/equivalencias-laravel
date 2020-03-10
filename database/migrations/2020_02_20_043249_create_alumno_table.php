<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
            $table->bigIncrements('id');

            $table->bigInteger('user_id')->unsigned();  
            $table->bigInteger('carrera_id')->unsigned();  
            $table->smallInteger('semestre');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('carrera_id')->references('id')->on('carrera')
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
        Schema::dropIfExists('alumno');
    }
}
