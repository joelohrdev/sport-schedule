<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'player_id',
        'tournament_id',
        'location',
        'date',
        'time',
        'opponent',
        'opponent_score',
        'team_score',
    ];

    protected $casts = [
        'date' => 'date',
        'time' => 'datetime',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
