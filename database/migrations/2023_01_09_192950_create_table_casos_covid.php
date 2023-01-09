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
        Schema::create('casos_covid', function (Blueprint $table) {
            $table->integer('idRegion');
            $table->foreign('idRegion')->references('idRegion')->on('regiones');
            $table->integer('numeroDeFallecidos');
            $table->integer('numeroDeCasosAsintomaticos');
            $table->integer('numeroDeCasosMasculinos');
            $table->integer('numeroDeCasosFemeninos');
            $table->string('mesDelReporte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('casos_covid');
    }
};
