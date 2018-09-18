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
use App\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//


Route::get('/dashboard', function () {
    $categories=Category::all();

    $user=User::all();


    return view('dashboard.index', compact('user', 'categories'));
}) ->name('dashboard');

Route::get('/leaderboard', function () {

    return view('categories.index');
});

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
