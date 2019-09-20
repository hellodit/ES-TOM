<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameParameter extends Model
{
    protected $table = "game_parameter";

    public function parameter()
    {
        return $this->belongsTo('App\Models\Parameter');
    }

    public function game()
    {
        return $this->belongsTo('App\Models\Game');
    }
}
