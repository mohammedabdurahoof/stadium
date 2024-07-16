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
    Schema::create('stadia', function (Blueprint $table) {
      $table->id();
      $table->string('stadium_name');
      $table->string('image');
      $table->text('description');
      $table->string('location');
      $table->string('address');
      $table->integer('capacity');
      $table->integer('seats');
      $table->integer('record_crowd');
      $table->boolean('lights')->default(false);
      $table->boolean('arena_roof')->default(false);
      $table->boolean('video_screen')->default(false);
      $table->integer('opened');
      $table->string('other_names');
      $table->string('sports_played');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('stadia');
  }
};
