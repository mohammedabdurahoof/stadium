<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
  use HasFactory;

  protected $fillable = [
    'stadium_name',
    'image',
    'description',
    'location',
    'address',
    'capacity',
    'seats',
    'record_crowd',
    'lights',
    'arena_roof',
    'video_screen',
    'opened',
    'other_names',
    'sports_played',
  ];

  protected static function boot()
  {
    parent::boot();

    static::deleting(function ($image) {
      // Delete the image file from the storage
      $imagePath = public_path('uploads/images/' . $image->image);
      if (file_exists($imagePath)) {
        unlink($imagePath);
      }
    });
  }
}
