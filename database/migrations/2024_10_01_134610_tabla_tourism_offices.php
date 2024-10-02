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
        Schema::create('tourism_offices', function (Blueprint $table) {
            $table->id();
            ##llave de destinos fk
            $table->foreignId('destination_id')->constrained('destinations')->onDelete('cascade')->onUpdate('cascade');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourism_offices');
    }
};
