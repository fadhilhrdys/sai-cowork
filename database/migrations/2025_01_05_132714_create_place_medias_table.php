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
        Schema::create('place_medias', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->foreignId('admin_id')->constrained(
                table: 'admins', indexName: 'place_medias_admin_id'
            );
            $table->foreignId('place_id')->constrained(
                table: 'places', indexName: 'place_medias_place_id'
            );
            $table->string('alt_image');
            $table->string('content_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('place_medias');
    }
};
