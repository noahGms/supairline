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

Route::get('/licenses', 'LicensesController@index');
Route::post('/licenses', 'LicensesController@store');
Route::get('/licenses/{license}/edit', 'LicensesController@edit');
Route::patch('/licenses/{license}', 'LicensesController@update');
Route::delete('/licenses/{license}', 'LicensesController@destroy');

Route::get('/functions', 'EmployeesFunctionsController@index');
Route::post('/functions', 'EmployeesFunctionsController@store');
Route::get('/functions/{function}/edit', 'EmployeesFunctionsController@edit');
Route::patch('/functions/{function}', 'EmployeesFunctionsController@update');
Route::delete('/functions/{function}', 'EmployeesFunctionsController@destroy');

Route::get('/cities', 'CitiesController@index');
Route::post('/cities', 'CitiesController@store');
Route::get('/cities/{city}/edit', 'CitiesController@edit');
Route::patch('/cities/{city}', 'CitiesController@update');
Route::delete('/cities/{city}', 'CitiesController@destroy');
