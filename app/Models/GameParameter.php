<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameParameter extends Model
{
    protected $table = "game_parameter";

    public function rule()
    {
        return $this->belongsTo('App\Models\Rule');
    }

    public function parameter()
    {
        return $this->hasMany('App\Models\Parameter', 'id', 'parameter_id');
    }

    public function game()
    {
        return $this->hasMany('App\Models\Game','id','game_id');
    }
}
