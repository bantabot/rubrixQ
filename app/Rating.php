<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Rating extends Model
{
    //
    protected $fillable = [

        'rubric_id', 'score', 'place_id'
    ];

    public function rubric(){

        return $this->belongsTo('App\Rubric');

    }
    public function place(){

        return $this->belongsTo(Place::class);
    }

    public function getPlaceSum($category_id, $place_id)

    {
        $rubric_ids = new Rubric;
//

        return $this-> where('place_id', $place_id)->whereIn('rubric_id', $rubric_ids->getRubricId($category_id))->sum('score');


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





//
//
//
//
//
//
//        return $this->sum();
//    }

//    public function userCategory($id){
//
//        $category = Category::findOrFail($id);
//
//        $user = Auth::user()->id;
//        $rubrics = Rubric::where(['user_id'=>$user, 'category_id'=>$id])->get();
//
//        return compact('rubrics', 'category');
//
//
//    }


}
