<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->float('monto');
            $table->float('taza_interes');
            $table->integer('plazo');
            $table->boolean('estado');
            $table->unsignedBigInteger('amortizacion_id');
            $table->unsignedBigInteger('socio_id');
            $table->unsignedBigInteger('asesor_id');
            $table->foreign('amortizacion_id')->references('id')->on('amortizaciones');
            $table->foreign('socio_id')->references('id')->on('socios');
            $table->foreign('asesor_id')->references('id')->on('asesores');
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
        Schema::dropIfExists('prestamos');
    }
}
