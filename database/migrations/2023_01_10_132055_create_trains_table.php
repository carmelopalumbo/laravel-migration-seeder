<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Generator as Faker;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 40);
            $table->string('departure_station', 40);
            $table->string('arrival_station', 40);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 6);
            $table->smallInteger('carriages')->nullable();
            $table->tinyInteger('on_time')->default(1);
            $table->tinyInteger('is_delete')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
};
