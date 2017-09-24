<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangayPuroksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangay_puroks', function (Blueprint $table) {
            $table->unsignedInteger('purok_id');
            $table->unsignedInteger('barangay_id');
            $table->decimal('long', 10, 7)->nullable();
            $table->decimal('lat', 10, 7)->nullable();
            $table->foreign('purok_id')->references('id')->on('puroks')->onDelete('set null');
            $table->foreign('barangay_id')->references('id')->on('barangays')->onDelete('set null');
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
        Schema::dropIfExists('barangay_puroks');
    }
}
