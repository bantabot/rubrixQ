<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    //
    protected $fillable = [

        'status', 'user_id', 'category_id', 'factor_id'
    ];


}
