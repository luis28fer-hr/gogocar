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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_ofrece_id');
            $table->unsignedBigInteger('auto_id');
            $table->unsignedBigInteger('tipo_viaje_id');
            $table->string('descripcion');
            $table->string('punto_salida');
            $table->time('hora_salida');
            $table->time('hora_salida_2')->nullable();
            $table->string('punto_llegada');
            $table->time('hora_llegada');
            $table->integer('asientos_disponibles');
            $table->boolean('activo');
            $table->timestamps();

            $table->foreign('usuario_ofrece_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('auto_id')
                ->references('id')
                ->on('autos')
                ->onDelete('cascade');

            $table->foreign('tipo_viaje_id')
                ->references('id')
                ->on('tipos_viajes')
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
        Schema::dropIfExists('viajes');
    }
};
