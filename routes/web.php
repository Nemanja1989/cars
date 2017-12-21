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

Route::get('/', function () {
    $name = "Nemanja";
    $age = 28;

    return view('welcome', compact('name', 'age'));
});


Route::get('/about', ['as' => 'about', 'uses' => function () {

    return view('cars.about');
}]);

Route::get('/cars', 'CarsController@index')->name('cars');

Route::get('/car/{id}', 'CarsController@show')->name('car');