<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSurveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('sub_category_id')->nullable();
            $table->unsignedInteger('house_hold_id')->nullable();
            $table->unsignedInteger('surverior_id')->nullable();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('set null');
            $table->foreign('house_hold_id')->references('id')->on('house_holds')->onDelete('set null');
            $table->foreign('surverior_id')->references('id')->on('users')->onDelete('set null');
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
        Schema::dropIfExists('surveries');
    }
}
