<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variable extends Model
{
    protected $fillable = [
        'name'
    ];

    public function parameters()
    {
        return $this->hasMany('App\Models\Parameter');
    }
}
