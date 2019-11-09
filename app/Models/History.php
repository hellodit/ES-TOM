<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $table = "rule_user";

    public function rule()
    {
        return $this->belongsTo('App\Models\Rule');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
