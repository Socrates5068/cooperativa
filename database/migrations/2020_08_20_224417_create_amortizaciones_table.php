<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmortizacionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amortizaciones', function (Blueprint $table) {
            $table->id();
            $table->float('capital');
            $table->float('interes');
            $table->unsignedBigInteger('cajera_id');
            $table->foreign('cajera_id')->references('id')->on('cajeras');
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
        Schema::dropIfExists('amortizaciones');
    }
}
