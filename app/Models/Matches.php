<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'match_date',
        'match_time',
        'description',
        'team1',
        'team2',
        'team1_score',
        'team2_score',
        'crowd',
        'stadium_id',
    ];

    /**
     * Get the stadium that hosts the match.
     */
    public function stadium()
    {
        return $this->belongsTo(Stadium::class);
    }
}
