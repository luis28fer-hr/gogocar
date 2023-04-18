<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('estatus');
            $table->unsignedBigInteger('viaje_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign("viaje_id")
            ->references("id")
            ->on("viajes")
            ->onDelete("cascade");

            $table->foreign("user_id")
            ->references("id")
            ->on("users")
            ->onDelete("cascade");
        });
    }

    public function down()
    {
        //
    }
};
