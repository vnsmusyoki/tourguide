<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristTripPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_trip_plans', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->bigInteger('accomodation_id')->nullable()->unsigned();
            $table->bigInteger('destination_id')->nullable()->unsigned();
            $table->string('total_days');
            $table->string('driver_fee');
            $table->string('accomodation_fee');
            $table->string('amount_paid');
            $table->string('transaction_code');
            $table->longText('status');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('accomodation_id')->references('id')->on('accomodations')->onDelete('cascade');
            $table->foreign('destination_id')->references('id')->on('destinations')->onDelete('cascade');
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
        Schema::dropIfExists('tourist_trip_plans');
    }
}
