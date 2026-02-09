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
        Schema::create('all_info_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('all_info_id')->constrained()->onDelete('cascade');
    $table->string('image'); // path to the image
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('all_info_images');
    }
};
