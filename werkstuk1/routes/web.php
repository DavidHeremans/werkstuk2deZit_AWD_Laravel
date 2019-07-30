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

//generic routes
Route::get('/', [
    'uses' => 'ItemController@getIndex',
    'as' => 'index'
]);

Route::get('/event',[
    'uses' => 'EventController@getEvent',
    'as' => 'event'
]);

//User routes
Route::get('/user', [
    'uses' => 'UserController@getUser',
    'as' => 'user'
]);

Route::post('/userupdate', [
    'uses' => 'UserController@postUpdateUser',
    'as' => 'userupdate'
]);

//item routes
Route::get('/item/{id}', [
    'uses' => 'ItemController@getItem',
    'as' => 'item'
]);

Route::get('/item/{id}/like', [
    'uses' => 'ItemController@getLikeItem',
    'as' => 'itemlike'
]);


////create item routes
Route::post('/itemcreate', [
    'uses' => 'ItemController@postCreateItem',
    'as' => 'itemcreate'
]);

Route::post('/itemupdate', [
    'uses' => 'ItemController@postUpdateItem',
    'as' => 'itemupdate'
]);

//Admin routes
Route::group(['prefix' => 'admin'], function (){
    Route::get('', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ]);
    Route::get('edit/{id}', [
        'uses' => 'AdminController@getEdit',
        'as' => 'admin.edit'
    ]);
    Route::get('create', [
        'uses' => 'AdminController@getCreate',
        'as' => 'admin.create'
    ]);
    Route::get('delete/{id}', [
        'uses' => 'AdminController@getDelete',
        'as' => 'admin.delete'
    ]);


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
