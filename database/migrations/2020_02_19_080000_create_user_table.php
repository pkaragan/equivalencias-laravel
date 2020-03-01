<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish2_ci';
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->bigInteger('tipo_user_id')->unsigned();
            $table->string('usuario');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('telefono');
            $table->string('direccion');
            $table->date('fecha_nac');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('estado');
            $table->rememberToken();
            $table->timestamps();
            
            $table->foreign('tipo_user_id')->references('id')->on('tipo_user')
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
        Schema::dropIfExists('user');
    }
}
