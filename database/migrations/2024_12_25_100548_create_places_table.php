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
        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->mediumText('address');
            $table->string('opening_hours');
            $table->json('amenities');
            $table->longText('description');
            $table->string('latitude');
            $table->string('longtitude');
            $table->foreignId('admin_id')->constrained(
                table: 'admins', indexName: 'place_admin_id'
            );
            $table->foreignId('city_id')->constrained(
                table: 'cities', indexName: 'place_city_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('places');
    }
};
