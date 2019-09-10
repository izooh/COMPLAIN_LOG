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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/create', function () {
    return view('create');
 
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/add_new', 'ComplainsController@Addcomplain')->name('addnew');
Route::get('/display', 'ComplainsController@Displayall')->name('display');
Route::middleware('changer')->get('/display_unreviewed', 'ComplainsController@Displayunreviewed')->name('display_unreviewed');
Route::post('/review/{id}', 'ComplainsController@Review')->name('review');
Route::get('/get_review/{id}', 'ComplainsController@GetReview')->name('get_review');



