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
        Schema::create('trip_stops', function (Blueprint $table) {
            $table->unsignedBigInteger("trip_id");
            $table->unsignedBigInteger("train_id");
            $table->unsignedBigInteger("stop_id");
            $table->foreign("trip_id")->references("id")->on("trips");
            $table->foreign("train_id")->references("id")->on("trains");
            $table->foreign("stop_id")->references("id")->on("stops");
            $table->primary(['trip_id', 'train_id', 'stop_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trip_stops');
    }
};
