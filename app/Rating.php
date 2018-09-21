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

    public function getPlaceSum($id)
    {
        return $this-> where('place_id', $id)->sum('score');


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
