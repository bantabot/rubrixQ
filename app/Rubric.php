<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    //
    protected $fillable = [
        'place', 'toast','presentation', 'booty_factor', 'tenderness','smokiness','sauce', 'portion_size', 'slaw', 'meat_sauce_combo', 'value', 'go_back', 'recommend', 'sides', 'brunswick_stew', 'pickles', 'service', 'dessert','ambiance', 'bonus',

    ];

    public function sumFactors(){
//
//        $toast = DB::table('rubrics')->where('id',$id)->value('toast');
//        $presentation = DB::table('rubrics')->where('id',$id)->value('presentation');
//
//        $total = $toast + $presentation;
//
//            return $total;

        echo "sum factors: ";







    }
}
