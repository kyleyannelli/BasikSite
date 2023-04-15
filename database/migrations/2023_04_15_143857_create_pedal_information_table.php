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
        Schema::create('pedal_information', function (Blueprint $table) {
            $table->id();
            $table->foreignId("pedal_id")->references("id")->on("pedals")->onDelete("cascade");
            $table->tinyText("color");
            $table->longText("description");
            $table->year("year_created");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedal_information');
    }
};
