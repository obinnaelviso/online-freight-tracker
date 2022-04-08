<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('invoice_id')->index();
            $table->string('status')->nullable();
            $table->string('location')->nullable();
            $table->dateTime('date_time')->nullable();
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
        Schema::dropIfExists('travel_histories');
    }
}
