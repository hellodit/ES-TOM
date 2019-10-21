<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    protected $fillable = ['code','name','description','variable_id'];

    public function variable()
    {
        return $this->belongsTo('App\Models\Variable','variable_id');
    }

    public function games(){
        return $this->belongsToMany("App\Models\Game");
    }

    public function getCodeName(){
        return $this->code.' - '.strip_tags($this->name);
    }

    public function GameParameter()
    {
        return $this->belongsTo('App\Models\GameParameter');
    }

    public function rules()
    {
        return $this->belongsToMany('App\Models\Rule');
    }

}
