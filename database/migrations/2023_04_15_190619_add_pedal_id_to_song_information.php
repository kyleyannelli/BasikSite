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
        Schema::table('song_information', function (Blueprint $table) {
            $table->foreignId("pedal_id")->after("artist_information_id")->references("id")->on("pedals")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('song_information', function (Blueprint $table) {
            $table->dropColumn("pedal_id");
        });
    }
};
