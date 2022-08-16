<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPrefTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pref', function (Blueprint $table) {
            $table->increments('id');
            $table->string('attraction');
            $table->string('dayStay')->nullable();
            $table->string('budget')->nullable();
            $table->string('foodType');
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
        Schema::dropIfExists('user_pref');
    }
}
