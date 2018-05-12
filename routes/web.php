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

Auth::routes();
Route::group(['prefix'=>'/admin'], function() {

    Route::get('/', 'AdminController@index')->name('home');
    Route::post('/upload','AdminController@upload')->name('uploadFile');
    Route::get('/songs','AdminController@ListSongs')->name('ListSongs');
    Route::get('/songs/del{Id}','DeleteController@DelSong')->name('DelSong');
    Route::get('/song/edit/{Id}','AdminController@EditSong')->name('EditSong');
    Route::post('/song/update','AdminController@UpdateSong')->name('UpdateSong');
    Route::get('song/edit/{Id}','AdminController@EditSong')->name('EditSong');
    Route::get('category/add','AdminController@AddCategory')->name('AddCategory');
    Route::get('category/edit/{id}','AdminController@EditCat')->name('EditCat');
    Route::post('category/update/success','AdminController@UpdateCat')->name('UpdateCat');
    Route::get('category/list','AdminController@ListCat')->name('ListCat');
    Route::get('category/del{id}','DeleteController@DelCat')->name('DelCat');
    Route::get('/country/add','AdminController@AddCountry')->name('AddCountry');
    Route::get('country/editor/edit/{Id}','AdminController@EditCountry')->name('EditCountry');
    Route::post('country/editor/save','AdminController@UpdateCountry')->name('UpdateCountry');
    Route::post('/category/store','AdminController@StoreCategory')->name('StoreCategory');
    Route::get('/countries','AdminController@ListCountries')->name('ListCountries');
    Route::post('/country/store','AdminController@StoreCountry')->name('StoreCountry');
    Route::get('/country/del{Id}','DeleteController@DelCountry')->name('DelCountry');
    Route::get('/register/moder/','AdminController@AddModerator')->name('AddModerator');
    Route::post('/register/moder/store','AdminController@StoreModerator')->name('StoreModerator');
    Route::get('/moder/list','AdminController@ListModers')->name('ListModers');
    Route::get('/moder/delete{id}','DeleteController@DelModer')->name('DelModer');
});

Auth::routes();
Route::group(['prefix'=>'/moder'], function() {
    Route::get('/','ModerController@index')->name('ModerIndex');
    Route::post('/songadd','ModerController@upload')->name('upload');

});


Route::group(['prefix'=>'/'],function () {
    Route::get('/','PublicController@getIndex')->name('getIndex');
    Route::post('/search','PublicController@SearchTrack')->name('SearchTrack');
    Route::post('/country/search','PublicController@SearchCountry')->name('SearchCountry');
    Route::get('/play','PublicController@PlayerOn')->name('RunPlayer');
    Route::get('/play/{category}','PublicController@PlayCat')->name('PlayCat');
    Route::get('/play/with/{Country}','PublicController@PlayCountry')->name('PlayCountry');
    Route::get('/countries','PublicController@ShowCountries')->name('ShowCountry');
    Route::get('/countries/{Continent}', 'PublicController@ShowByContinent')->name('ShowByCont');
    Route::get('/player','PublicController@showPlayer')->name('showPlayer');




});

