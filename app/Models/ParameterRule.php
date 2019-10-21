<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParameterRule extends Model
{
    protected $table = 'parameter_rule';
    protected $fillable = ['parameter_id','rule_id'];

}
