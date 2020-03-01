<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaUacjTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_uacj', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
            $table->bigIncrements('id');
            $table->bigInteger('carrera_uacj_id')->unsigned();
            $table->string('nombre');
            $table->smallInteger('creditos');
            $table->boolean('obligatoria');
            $table->smallInteger('semestre');
            $table->timestamps();

            $table->foreign('carrera_uacj_id')->references('id')->on('carrera_uacj')
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
        Schema::dropIfExists('materia_uacj');
    }
}
