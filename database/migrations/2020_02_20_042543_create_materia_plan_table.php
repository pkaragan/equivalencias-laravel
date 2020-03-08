<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_plan_carrera', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';

            $table->bigInteger('materia_id')->unsigned();
            $table->bigInteger('plan_carrera_id')->unsigned();
            $table->foreign('materia_id')->references('id')->on('materia')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('plan_carrera_id')->references('id')->on('plan_carrera')
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
        Schema::dropIfExists('materia_plan');
    }
}
