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
        Schema::create('song_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId("artist_information_id")->references("id")->on("artist_information")->onDelete("cascade");
            $table->string("name");
            $table->date("released");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('song_information');
    }
};
