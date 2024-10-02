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
        Schema::create('point_of_interest_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('point_of_interest_id')->constrained('points_of_interest')->onDelete('cascade')->onUpdate('cascade');
            $table->enum('media_type', ['image', 'video']);
            $table->string('url');
            $table->string('caption');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('point_of_interest_media');
    }
};
