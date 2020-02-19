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


// Dashboard routes
Route::get('/', function () {
    return view('welcome');
});


// License routes
Route::get('/licenses', 'LicensesController@index');
Route::post('/licenses', 'LicensesController@store');
Route::get('/licenses/{license}/edit', 'LicensesController@edit');
Route::patch('/licenses/{license}', 'LicensesController@update');
Route::delete('/licenses/{license}', 'LicensesController@destroy');

// Function routes
Route::get('/functions', 'EmployeesFunctionsController@index');
Route::post('/functions', 'EmployeesFunctionsController@store');
Route::get('/functions/{function}/edit', 'EmployeesFunctionsController@edit');
Route::patch('/functions/{function}', 'EmployeesFunctionsController@update');
Route::delete('/functions/{function}', 'EmployeesFunctionsController@destroy');

// City routes
Route::get('/cities', 'CitiesController@index');
Route::post('/cities', 'CitiesController@store');
Route::get('/cities/{city}/edit', 'CitiesController@edit');
Route::patch('/cities/{city}', 'CitiesController@update');
Route::delete('/cities/{city}', 'CitiesController@destroy');

// Employee routes
Route::resource('employees', 'EmployeesController');

// Type routes
Route::get('/types', 'TypesController@index');
Route::post('/types', 'TypesController@store');
Route::get('/types/{type}/edit', 'TypesController@edit');
Route::patch('/types/{type}', 'TypesController@update');
Route::delete('/types/{cits}', 'TypesController@destroy');
