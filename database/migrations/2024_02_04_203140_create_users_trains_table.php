<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users_trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->integer('train_code');
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->datetime('departure_time');
            $table->datetime('arrival_time');
            $table->integer('number_of_wagon');
            $table->string('on_schedule',50);
            $table->string('cancelled',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
