<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = ['name'];

    public function gameparams()
    {
        return $this->hasMany('App\Models\GameParameter');
    }

    // public function gameparams()
    // {
    //     return $this->hasManyThrough('App\Models\GameParameter', 'App\Models\Parameter');
    // }
}
