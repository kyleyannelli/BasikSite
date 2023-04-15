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
        Schema::create('songs_pedals', function (Blueprint $table) {
            $table->id();
            $table->foreignId("song_information_id")->references("id")->on("song_information")->onDelete("cascade");
            $table->foreignId("pedal_id")->references("id")->on("pedals")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('songs_pedals');
    }
};
