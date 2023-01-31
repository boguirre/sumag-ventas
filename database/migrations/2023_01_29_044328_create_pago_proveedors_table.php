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
        Schema::create('pago_proveedors', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_deposito');
            $table->double('monto_deposito');
            $table->double('monto_pago');
            $table->unsignedBigInteger('sucursal_id');
            $table->string('numero_factura');
            $table->unsignedBigInteger('proveedor_id');
            $table->text('descripcion');
            $table->foreign('sucursal_id')->references('id')->on('sucursals')->onDelete('cascade');
            $table->foreign('proveedor_id')->references('id')->on('proveedors')->onDelete('cascade');
            $table->integer('estado')->default(1);
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
        Schema::dropIfExists('pago_proveedors');
    }
};
