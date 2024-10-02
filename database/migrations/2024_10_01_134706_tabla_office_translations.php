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
        Schema::create('office_translations', function (Blueprint $table) {
            $table->id();
            ##llave de ofina fk
            $table->foreignId('office_id')->constrained('tourism_offices')->onDelete('cascade')->onUpdate('cascade');
            $table->string('language');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_translations');
    }
};
