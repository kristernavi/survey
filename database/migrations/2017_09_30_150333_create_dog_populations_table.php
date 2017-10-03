<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDogPopulationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dog_populations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->enum('origin', ['Local','Out-sider'])->default('Local')->nullable();
            $table->enum('breed', ['Mongrel Native', 'Exotic Specify'])->default('Mongrel Native')->nullable();
            $table->string('color')->nullable();
            $table->date('age');
            $table->enum('sex', ['M','F'])->default('M')->nullable();
            $table->enum('neutering', ['Castrated','Intact','Spayed'])->default('Intact')->nullable();
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
        Schema::dropIfExists('dog_populations');
    }
}
