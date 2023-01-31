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
        Schema::create('pago_proveedor_detalles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pago_proveedor_id');
            $table->foreign('pago_proveedor_id')->references('id')->on('pago_proveedors')->onDelete('cascade');
            $table->double('monto');
            $table->dateTime('fecha_pago');
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
        Schema::dropIfExists('pago_proveedor_detalles');
    }
};
