<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['code','name','category','description','image'];

    public function parameters(){
        return $this->belongsToMany("App\Models\Parameter");
    }

    public function users(){
        return $this->belongsToMany("App\Models\User");
    }

    public function getCodeName(){
        return $this->code.' - '.$this->name;
    }

    public function rules()
    {
        return $this->hasMany('App\Models\Rule');
    }

}
