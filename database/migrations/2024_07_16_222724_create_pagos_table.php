<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();            
            $table->string('numeropago');
            $table->string('conceptopago');
            $table->date('fechapago');
            $table->bigInteger('cantidadpago');
            
            $table->unsignedBigInteger('tipopago_id')->nullable();
            $table->foreign('tipopago_id')->references('id')->on('tipopagos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
