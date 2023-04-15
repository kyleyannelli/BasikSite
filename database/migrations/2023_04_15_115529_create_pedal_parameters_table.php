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
        Schema::create('pedal_parameters', function (Blueprint $table) {
            $table->id();
            $table->foreignId("pedal_id")->references("id")->on("pedals")->onDelete("cascade");
            $table->string("name");
            $table->tinyText("float_value_as_string")->nullable();
            $table->integer("min_value")->nullable();
            $table->integer("max_value")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedal_parameters');
    }
};
