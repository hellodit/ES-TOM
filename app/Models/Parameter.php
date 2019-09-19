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

}
