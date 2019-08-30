<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = ['code','name','description','category_id','image'];

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }
}
