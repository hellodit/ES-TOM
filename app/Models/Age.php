<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Age extends Model
{
    protected $fillable = [
        'name','code','description'
    ];

    public function modalities()
    {
        return $this->hasMany('App\Models\modality');
    }
}
