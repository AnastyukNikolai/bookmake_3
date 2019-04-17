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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', 'IndexController@indexShow');

Route::get('/book/{id}', 'IndexController@bookShow')->name('bookShow');

Route::get('/chapter/{id}', 'IndexController@chapterShow')->name('chapterShow');

////////////////////////////////////////////author

Route::get('/user/{id}/books', 'authorController@artworksShow')->name('artworksShow');
Route::get('/artwork/add', 'authorController@addArtwork')->name('addArtwork');
Route::post('/artwork/add', 'authorController@storeArtwork')->name('storeArtwork');

////////////////////////////////////////////

Route::auth();

Route::get('/home', 'HomeController@index');
