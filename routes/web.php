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

use App\User;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//


Route::get('/dashboard', function () {

    $user=User::all();


    return view('dashboard.index', compact('user'));
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

//Route::resource('/', 'UserUsersController');

//Route::resource('admin/users', 'AdminUsersController');

Route::resource('/rubric', 'RubricController');
