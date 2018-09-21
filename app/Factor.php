<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    //
    protected $fillable = [

        'name', 'description'
    ];

    public function rubric(){

        return $this->hasMany('App\Rubric');

    }

}
