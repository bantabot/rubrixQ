<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //
    protected $fillable = [

        'rubric_id', 'score', 'place_id'
    ];
}
