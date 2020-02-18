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

use Illuminate\Http\Resources\Json\Resource;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('licenses', 'LicensesController');

Route::get('/licenses', 'LicensesController@index');
Route::post('/licenses', 'LicensesController@store');
Route::get('/licenses/{license}/edit', 'LicensesController@edit');
Route::patch('/licenses/{license}', 'LicensesController@update');
Route::delete('/licenses/{license}', 'LicensesController@destroy');
