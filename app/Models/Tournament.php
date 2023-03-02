<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
        'name',
        'player_id',
        'location',
        'start_date',
        'end_date',
    ];

    protected $dates = [
        'start_date',
        'end_date',
    ];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

}
