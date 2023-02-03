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
        Schema::create('duas', function (Blueprint $table) {
            $table->id();
            $table->string('numero_dua');
            $table->dateTime('fecha_numeracion');
            $table->date('mes_llegada');
            $table->unsignedBigInteger('sucursal_id');
            $table->double('monto_percepcion');
            $table->date('mes_cobro');
            $table->integer('estado')->default(1);
            $table->foreign('sucursal_id')->references('id')->on('sucursals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('duas');
    }
};
