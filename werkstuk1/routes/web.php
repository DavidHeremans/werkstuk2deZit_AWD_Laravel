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
    'as' => 'home'
]);

Route::get('/about', function () {
    return view('other.about');
})->name('about');

//item routes
Route::get('/item/{id}', function ($id) {

    if($id == 1){
        $data = [
            'titel' => 'Nieuwsbericht nummer 1',
            'onderwerp' => 'Wat te doen op ehackb'];
    }elseif ($id == 2){
        $data = [
        'titel' => 'Nieuwsbericht nummer 2',
        'onderwerp' => 'Dit moet je zeker doen'];
    }elseif($id == 3){
        $data = [
        'titel' => 'Nieuwsbericht nummer 3',
        'onderwerp' => 'Deze persoon komt spreken'];
    }
    return view('content.item', ['nieuwsbericht' => $data]);
})->name('item');


//create item routes
Route::post('/itemcreate', function(\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {

    $validation = $validator->make($request->all(), [
       'title' => 'required|max:20',
        'content' => 'required|min:10'
    ]);

    if($validation->fails()){
        return redirect()->back()->withErrors($validation);
    }else{
        $title = $request->input('title');
        return redirect('admin')->with('forminput', $title);
    }
    //$data = $request->all();

})->name('itemcreate');

//Admin routes
Route::group(['prefix' => 'admin'], function (){
    Route::get('', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ]);
    Route::get('edit', [
        'uses' => 'AdminController@getEdit',
        'as' => 'admin.edit'
    ]);
    Route::get('create', [
        'uses' => 'AdminController@getCreate',
        'as' => 'admin.create'
    ]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
