<?php

namespace App\Http\Controllers;

use App\Category;
use App\Factor;
use App\Place;
use App\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RubricController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
//
        $user = Auth::user()->id;

        $rubrics= Rubric:: where('user_id', $user)->select('category_id')->distinct()->get();

// why doesn't this work? is it because no methods in controllers?
//        $rubrics = new Rubric;
//        $rubrics->getUniqueCategoryByUser($user);
        return view('rubric/index', compact('rubrics', 'rubric_code'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $factors = Factor::all();
        $categories = Category::pluck('name', 'id')->all();
        $rubrics = Rubric::all();
        return view('rubric/create', compact('factors', 'categories', 'rubrics'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

//        dd($request);
        $user_id = Auth::user()->id;

        $input = $request->all();
        $input['rubric_code'] = $user_id . 0 . $request['category_id'];

        $user = Auth::user();
        foreach ($request->factor_id as $factor){

            $input['factor_id'] = $factor;
            $user->rubric()->create($input);

        }

        return redirect('/rubric');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = Auth::user()->id;
        $places = Place::pluck('name', 'id')->all();
        $factor_id = Rubric::where(['user_id'=>$user, 'category_id'=>$id])->groupBy('factor_id')->pluck('factor_id')->all();
        $factors = Factor::whereNotIn('id', $factor_id)->groupBy('id')->get();


        $category = Category::findOrFail($id);


        $rubrics = Rubric::where(['user_id'=>$user, 'category_id'=>$id])->get();

        return view('rubric/show', compact('rubrics', 'category', 'factors'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $rubric = Rubric::findOrFail($id);
        return view('/rubric/update', compact('rubric'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rubric= Rubric::findOrFail($id);

        $input = $request->all();


        $rubric->update($input);
        return redirect('/rubric');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $rubric=  Rubric::findOrFail($id);
        $rubric->delete();
        return redirect('/rubric');

    }
}
