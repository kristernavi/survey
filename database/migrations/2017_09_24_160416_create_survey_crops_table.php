<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveyCropsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_crops', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('casava')->default(false);
            $table->double('casava_area')->nullable();
            $table->boolean('camote')->default(false);
            $table->double('camote_area')->nullable();
            $table->boolean('ubi')->default(false);
            $table->double('ubi_area')->nullable();
            $table->boolean('mango')->default(false);
            $table->double('mango_trees')->nullable();
            $table->boolean('cacao')->default(false);
            $table->double('cacao_trees')->nullable();
            $table->boolean('coffee')->default(false);
            $table->double('coffee_trees')->nullable();
            $table->boolean('carnava')->default(false);
            $table->double('carnava_trees')->nullable();
            $table->boolean('banana')->default(false);
            $table->double('banana_mats')->nullable();
            $table->unsignedInteger('survey_id')->nullable();
            $table->foreign('survey_id')->references('id')->on('surveries')->onDelete('set null');
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
        Schema::dropIfExists('survey_crops');
    }
}
