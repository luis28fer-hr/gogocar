<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calificaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('viaje_id');
            $table->unsignedBigInteger('usuario_califica_id');
            $table->integer('puntuacion');
            $table->string('comentarios')->nullable();
            $table->timestamps();

            $table->foreign('viaje_id')
                ->references('id')
                ->on('viajes')
                ->onDelete('cascade');

            $table->foreign('usuario_califica_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calificaciones');
    }
};
