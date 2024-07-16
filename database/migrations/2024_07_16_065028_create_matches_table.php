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
    Schema::create('matches', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->date('match_date');
      $table->time('match_time');
      $table->text('description')->nullable();
      $table->string('team1')->nullable();
      $table->string('team2')->nullable();
      $table->string('team1_score')->nullable();
      $table->string('team2_score')->nullable();
      $table->integer('crowd')->nullable();
      $table
        ->foreignId('stadium_id')
        ->constrained('stadia')
        ->onDelete('cascade');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('matches');
  }
};
