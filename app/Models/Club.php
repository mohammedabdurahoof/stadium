<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'club_name',
        'no_matches',
        'total_crowds',
        'average_crowds',
        'season',
    ];
}
