<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriaPlanUacj extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia_plan_uacj', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';

            $table->bigInteger('materia_id')->unsigned();
            $table->foreign('materia_id', 'fk_materiaplanuacj_materia')->references('id')->on('materia_uacj')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->bigInteger('plan_id')->unsigned();
            $table->foreign('plan_id', 'fk_materiaplanuacj_plan')->references('id')->on('plan_carrera_uacj')
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
        Schema::dropIfExists('materia_plan_uacj');
    }
}
