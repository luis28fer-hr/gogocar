<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('viajes', function (Blueprint $table) {
            $table->id();
            $table->string('estatus');
            $table->string('tipo');
            $table->string('encuentro');
            $table->string('lunes')->nullable();
            $table->string('Martes')->nullable();
            $table->string('Miercoles')->nullable();
            $table->string('Jueves')->nullable();
            $table->string('Viernes')->nullable();
            $table->string('sabado')->nullable();
            $table->string('ida')->nullable();
            $table->string('vuelta')->nullable();
            $table->integer('capacidad');
            $table->unsignedBigInteger('auto_id');
            $table->timestamps();

            $table->foreign("auto_id")
            ->references("id")
            ->on("autos")
            ->onDelete("cascade");
        });
    }

    public function down()
    {
        //
    }
};
