<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable=[

        'name', 'description'

    ];
    public function rubric(){

        return $this->hasMany('App\Rubric');

    }
    public function getCategoryIdbyName($name){

        return $this-> where('name', $name)->first()->id;
    }




}
