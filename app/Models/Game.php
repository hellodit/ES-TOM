<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['code','name','category','description','image'];

    public function parameters(){
        return $this->belongsToMany("App\Models\Parameter");
    }

    public function getCodeName(){
        return $this->code.' - '.$this->name;
    }

    public function rule()
    {
        return $this->hasMany('App\Models\Rule');
    }

    public function GameParameter()
    {
        return $this->belongsTo('App\Models\GameParameter');
    }
}
