<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'team',
    ];

    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
