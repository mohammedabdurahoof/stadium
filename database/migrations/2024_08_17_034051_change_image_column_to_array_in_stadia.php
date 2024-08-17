<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('stadia', function (Blueprint $table) {
            // Change the 'image' column to be of type JSON
            $table->json('image')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stadia', function (Blueprint $table) {
            // Revert 'image' column back to string
            $table->string('image')->change();
        });
    }
};
