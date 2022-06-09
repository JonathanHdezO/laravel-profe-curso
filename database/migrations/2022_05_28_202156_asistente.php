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
        //
        Schema::create('asistentes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->biginteger('profesor_id')->unsigned();
            $table->string('nombre');
            $table->string('direccion');
            $table->string('cubiculo');
            $table->timestamps();
            $table->foreign('profesor_id')->references('id')->on('profesors')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
