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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departure_station', 150);
            $table->string('arrival_station', 150);
            $table->time('departure_hour');
            $table->time('arrival_hour');
            $table->string('train_code', 200)->unique();
            $table->tinyInteger('carriages_number')->unsigned();
            $table->tinyInteger('on_time')->default(1);
            $table->tinyInteger('cancelled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
