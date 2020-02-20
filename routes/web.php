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
Route::resource('licenses','LicensesController' )->except([
    'create', 'show'
]);

// Function routes
Route::resource('functions','EmployeesFunctionsController' )->except([
    'create', 'show'
]);

// City routes
Route::resource('cities','CitiesController' )->except([
    'create', 'show'
]);

// Employee routes
Route::resource('employees', 'EmployeesController')->except([
    'show'
]);

// Type routes
Route::resource('types','TypesController' )->except([
    'create', 'show'
]);

// Airplane routes
Route::resource('airplanes', 'AirplanesController')->except([
    'create', 'show'
]);

// Route routes
Route::resource('routes', 'RoutesController')->except([
    'create', 'show'
]);

// Flight routes
Route::resource('flights', 'FlightsController')->except([
    'show'
]);

// Departure routes
Route::resource('departures', 'DeparturesController')->except([
    'show'
]);
