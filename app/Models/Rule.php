<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = ['name','game_id'];

    public function params()
    {
        return $this->belongsToMany('App\Models\Parameter')->withPivot('parameter_id');
    }

    public function parameters()
    {
        return $this->hasManyThrough('App\Models\ParameterRule', 'App\Models\Parameter');
    }

    public function game()
    {
        return $this->belongsTo('App\Models\Game');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

}
