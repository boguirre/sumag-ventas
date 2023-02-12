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
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_comprobante_id');
            $table->string('numero_comprobante');
            $table->date('fecha_emision');
            $table->string('tipo_importe');
            $table->double('importe');
            $table->date('fecha_pago');
            $table->unsignedBigInteger('sucursal_id');
            $table->foreign('sucursal_id')->references('id')->on('sucursals')->onDelete('cascade');
            $table->text('descripcion');
            $table->integer('estado')->default(1);
            $table->foreign('tipo_comprobante_id')->references('id')->on('tipo_comprobantes')->onDelete('cascade');
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
        Schema::dropIfExists('comprobantes');
    }
};
