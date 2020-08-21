<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAhorrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ahorros', function (Blueprint $table) {
            $table->id();
            $table->string('num_libreta', 10);
            $table->string('moneda', 1)->default('1');
            $table->double('monto', 8.2)->default('0');
            $table->float('interes')->default('0');
            $table->unsignedBigInteger('socio_id');
            $table->unsignedBigInteger('cajera_id');
            $table->foreign('socio_id')->references('id')->on('socios');
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
        Schema::dropIfExists('ahorros');
    }
}
