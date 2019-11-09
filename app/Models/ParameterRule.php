<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParameterRule extends Model
{
    protected $table = 'parameter_rule';
    protected $fillable = ['parameter_id','rule_id'];

    public function param()
    {
        return $this->belongsTo('App\Models\Parameter');
    }
    public function rule()
    {
        return $this->belongsTo('App\Models\Rule');
    }

}
