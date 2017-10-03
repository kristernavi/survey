<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVegetableCropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vegetable_crops', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('area')->default(0);
            $table->unsignedInteger('crop_id')->nullable();
            $table->foreign('crop_id')->references('id')->on('survey_crops')->onDelete('set null');
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
        Schema::dropIfExists('vegetable_crops');
    }
}
