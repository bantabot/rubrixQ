<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Rubric extends Model
{
    //
    protected $fillable = [

        'status', 'user_id', 'category_id', 'factor_id', 'rubric_code'
    ];

    public function factor(){

       return $this->belongsTo('App\Factor');

    }
    public function category(){

       return  $this->belongsTo('App\Category');

    }

    public function user(){

        return $this->belongsTo('App\User');

    }
    public function rating(){

        return $this->hasMany('App\Rating');
    }


    public function getUniqueCategoryByUser($user){



      return $this -> where('user_id', $user)->select('category_id')->distinct()->get();


    }

    public function getRubricId($category_id){

        $user = Auth::user()->id;

        return $this-> where(['user_id'=> $user, 'category_id'=>$category_id])->pluck('id')->all();
    }










}
