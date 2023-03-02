<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Livewire\Component;

class GameList extends Component
{
    public function render()
    {
        return view('livewire.game-list', [
            'dates' => Game::orderBy('date')
                ->get()
                ->groupBy(function ($val) {
                    return Carbon::parse($val->date)->format('F');
                })
        ]);
    }
}
