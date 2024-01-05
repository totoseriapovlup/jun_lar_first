<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/task', function (){
    return view('task.index');
})->name('task.index');

Route::post('/task', function (\Illuminate\Http\Request $request){
    dump($request->name);
})->name('task.store');

Route::delete('/task/{task}', function (){
    echo 'destroy task';
})->name('task.destroy');

//Route::get('/task/{task}/edit', function (){
//    echo 'edit task';
//});
//
//Route::post('/task/{task}', function (){
//    echo 'update task';
//});