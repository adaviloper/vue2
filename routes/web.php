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

    use App\Status;

    Route::get('/', function () {
    return view('welcome');
    // return redirect('/projects/create');
});

    Route::get('/statuses' , 'StatusesController@index');
    Route::post('/statuses' , 'StatusesController@store');
