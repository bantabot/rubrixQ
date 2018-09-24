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

    public function getCategoryName($id){

        //given a place get all the rubric IDs with ratings

         $places = $id->rating->groupBy('rubric_id')->keys()->all();

         //for each rubric ID get the category name associated with it

         $category_names = [];

         foreach ($places as $place){

             $category_names[] = Rubric::find($place)->category->name;



         }
         $category_names = array_unique($category_names);

        return $category_names;

        }


}
