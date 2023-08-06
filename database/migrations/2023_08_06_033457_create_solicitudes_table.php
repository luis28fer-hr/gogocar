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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estatus_solicitud_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('viaje_id');
            $table->dateTime('fecha_solicitado');
            $table->string('ubicacion');
            $table->string('comentarios')->nullable();
            $table->timestamps();

            $table->foreign('estatus_solicitud_id')
                ->references('id')
                ->on('estatus_solicitudes')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('viaje_id')
                ->references('id')
                ->on('viajes')
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
        Schema::dropIfExists('solicitudes');
    }
};
