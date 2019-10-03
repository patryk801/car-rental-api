<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('model_id');
            $table->unsignedBigInteger('fuel_id');
            $table->unsignedSmallInteger('year_of_production');
            $table->decimal('price', 10, 2);    

            $table->foreign('brand_id')->references('id')->on('brands');
            $table->foreign('model_id')->references('id')->on('models');
            $table->foreign('fuel_id')->references('id')->on('fuel_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
