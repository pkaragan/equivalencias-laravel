<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnoMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_materias', function (Blueprint $table) {
            $table->bigInteger('alumno_id')->unsigned();  
            $table->bigInteger('materia_id')->unsigned(); 
            
            $table->foreign('alumno_id')->references('id')->on('alumno')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('materia_id')->references('id')->on('materia')
                ->onDelete('cascade')
                ->onUpdate('cascade');

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
        Schema::dropIfExists('alumno_materias');
    }
}
