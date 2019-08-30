<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name','description'];

    public function game()
    {
        return $this->hasOne('App\Models\Game');
    }
}
