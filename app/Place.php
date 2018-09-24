<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    protected $fillable = [
        'name', 'address', 'city', 'state', 'zipcode', 'google_place_id'
    ];



    public function rating(){

        return $this->hasMany('App\Rating');

    }




}
