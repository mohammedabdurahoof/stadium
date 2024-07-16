<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
  use HasFactory;

  protected $fillable = ['title', 'content', 'featured_image'];

  protected static function boot()
  {
    parent::boot();

    static::deleting(function ($image) {
      // Delete the image file from the storage
      $imagePath = public_path('uploads/images/' . $image->featured_image);
      if (file_exists($imagePath)) {
        unlink($imagePath);
      }
    });
  }
}
