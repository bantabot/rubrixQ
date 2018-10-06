<?php

namespace App\Http\Controllers;

use App\Category;
use App\Place;
use App\Rating;
use App\Rubric;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user()->id;

        $rubrics = Rubric::where('user_id', $user)->groupBy('category_id')->get();

        $places = Rating::select('place_id')->distinct()->get();
        $ratings = new Rating;

        $test= new Category;


        return view('ratings/index', compact('places', 'ratings', 'test', 'categoryNames'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($category_id, $place_id)
    {
        //


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
        $input = $request->all();

        //loop through the requests sent over and parse out separate scores to add each in it's own row

        $entryCount = count($request->score);

        for ($i = 0; $i < $entryCount; $i++ ){

            $input['score'] = $request->score[$i];
            $input['rubric_id'] = $request->rubric_id[$i];

            Rating::create($input);



        }


        return redirect('dashboard');
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
        //pluck the names of the places to populate the dropdown menu
        $places = Place::pluck('name', 'id')->all();
        //set the user and category ID in order to only bring back categories that have been set by this user
        $user = Auth::user()->id;
        $category = Category::findOrFail($id);
        $rubrics = Rubric::where(['user_id'=> $user, 'category_id'=> $id])->get();
        return view('ratings/show', compact('rubrics', 'places', 'category'));
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
    }
}
