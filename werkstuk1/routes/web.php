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

Route::get('/events',[
    'uses' => 'EventController@getEvent',
    'as' => 'events'
]);

Route::get('/event/{id}/registration', [
    'uses' => 'EventController@getRegisterForEvent',
    'as' => 'eventregistration'
]);

Route::get('/event/registration/{id}', [
    'uses' => 'EventController@getUnregisterForEvent',
    'as' => 'unregister'
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
Route::post('/eventcreate', [
    'uses' => 'EventController@postCreateEvent',
    'as' => 'eventcreate'
]);

Route::post('/itemupdate', [
    'uses' => 'ItemController@postUpdateItem',
    'as' => 'itemupdate'
]);

Route::post('/eventupdate', [
    'uses' => 'EventController@postUpdateEvent',
    'as' => 'eventupdate'
]);

//Admin routes
Route::group(['prefix' => 'admin'], function (){
    Route::get('', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ]);
    Route::get('editnews/{id}', [
        'uses' => 'AdminController@getEditNews',
        'as' => 'admin.editnews'
    ]);
    Route::get('createnews', [
        'uses' => 'AdminController@getCreateNews',
        'as' => 'admin.createnews'
    ]);
    Route::get('createevent', [
        'uses' => 'AdminController@getCreateEvent',
        'as' => 'admin.createevent'
    ]);
    Route::get('deletenews/{id}', [
        'uses' => 'AdminController@getDeleteNews',
        'as' => 'admin.deletenews'
    ]);
    Route::get('deleteevent/{id}', [
        'uses' => 'AdminController@getDeleteEvent',
        'as' => 'admin.deleteevent'
    ]);
    Route::get('editevent/{id}', [
        'uses' => 'AdminController@getEditEvent',
        'as' => 'admin.editevent'
    ]);


});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
