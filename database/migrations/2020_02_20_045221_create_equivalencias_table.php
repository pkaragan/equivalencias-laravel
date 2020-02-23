<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquivalenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equivalencias', function (Blueprint $table) {
            $table->bigInteger('materia_uacj_id')->unsigned();  
            $table->bigInteger('materia_id')->unsigned(); 
            
            $table->foreign('materia_uacj_id')->references('id')->on('materia_uacj')
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
        Schema::dropIfExists('equivalencias');
    }
}
