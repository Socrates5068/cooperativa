<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('numero', 10);
            $table->biginteger ('persona_id')->unsigned(); //identificamos a la FK
            $table->foreign('persona_id')->references('id')->on('personas'); //apuntamos hacia la la FK 
            $table->timestamps();
            //$table->foreignId('persona_id')->references('id')->on('personas')->comment('relacion en personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('socios');
    }
}
