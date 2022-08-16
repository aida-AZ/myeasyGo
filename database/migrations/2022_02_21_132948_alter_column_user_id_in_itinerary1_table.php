<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterColumnUserIdInItinerary1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('itinerary1', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('destination_id')->references('id')->on('destination');
            $table->foreign('user_pref_id')->references('id')->on('user_pref');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('itinerary1', function (Blueprint $table) {
            //
        });
    }
}
