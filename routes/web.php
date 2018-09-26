<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Category;
use App\Place;
use App\Factor;
use App\Rating;
use App\Rubric;
use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//


Route::get('/dashboard', function () {
//    $categories=Category::all();

//    $user=User::all();


//    return view('dashboard.index', compact('user', 'categories'));
    return redirect(route('rubric.index'));
}) ->name('dashboard');

Route::get('/leaderboard/{id}', function ($id) {

    $user = Auth::user()->id;
    $category = Category::findOrFail($id);
    $rubric_id = new Rubric;
    $rubric_id = $rubric_id->getRubricId($id);
    $ratings = Rating::whereIn('rubric_id', $rubric_id)->groupBy('place_id')->get();
    $scores = [];
    foreach ($ratings as $rating){

        $scores[$rating->place->name]=$rating->getPlaceSum($id, $rating->place->id);

    }
    arsort($scores);



    return view('/ratings/leaderboard', compact('category', 'ratings', 'scores'));
})->name('leaderboard');

Route::get('/create', function () {

    return view('categories.create');
});
Route::group(['middleware'=>'admin'], function(){

    Route::resource('admin/users', 'AdminUsersController');

});
Route::get('/logout' , 'Auth\LoginController@logout');

//Route::resource('/', 'UserUsersController');
//
//Route::resource('admin/users', 'AdminUsersController');

Route::resource('/rubric', 'RubricController');

Route::resource('/category', 'CategoryController');

Route::resource('/factor', 'FactorController');

Route::resource('/place', 'PlaceController');
Route::resource('/rating', 'RatingController');

Route::get('/testview/{id}', function($id){

    $places = Place::pluck('name', 'id')->all();
    $factors = Factor::all();



    $category = Category::findOrFail($id);

    $user = Auth::user()->id;
    $rubrics = Rubric::where(['user_id'=>$user, 'category_id'=>$id])->get();

    return view('rubric/show', compact('rubrics', 'category', 'factors'));
//    return view('ratings/edit', compact('rubrics', 'category', 'places'));

})->name('testview');

//Route::get('/rating/$id/view', function($id){
//
//    $category = Category::findOrFail($id);
//
//    $user = Auth::user()->id;
//    $rubrics = Rubric::where(['user_id'=>$user, 'category_id'=>$id])->get();
//    $ratings = Rating::where('rubric_id', )
//
//    return view('ratings/view', compact('rubrics', 'category'));
//
//
//
//
//});






//Route::group('', function(){
//
//    $categories=Category::all();
//
//
//    Route::resource('/rubric', 'RubricController');
//
//    Route::resource('/category', 'CategoryController');
//
//    return view('$redirect->intended()', compact('categories'));
//
//
//});
