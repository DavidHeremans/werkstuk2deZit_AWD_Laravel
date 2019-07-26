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
Route::get('/', function () {
    return view('content.index');
})->name('home');

Route::get('/about', function () {
    return view('other.about');
})->name('about');

//item routes
Route::get('/item/{id}', function ($id) {
    return view('content.item', ['nieuwsbericht' => $id]);
})->name('item');


//Admin routes
Route::name('admin.')->group(function (){
    Route::get('/admincreate', function () {
        return view('admin.create');
    })->name('create');
    Route::get('/adminedit', function () {
        return view('admin.edit');
    })->name('edit');
    Route::get('/adminindex', function () {
        return view('admin.index');
    })->name('index');
});


