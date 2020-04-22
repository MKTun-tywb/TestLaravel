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

Route::get('/add', function () {
    return view('add');
});
Route::get('/', 'FishController@home');
Route::post('/add', 'FishController@create');
Route::get('/homes', 'FishController@home');
Route::get('/homes/{code}', 'FishController@admin');

Route::get('/Fish_Detail/{id}','FishController@detail');

Route::get('/Fish_Edit/{id}','FishController@edit');
Route::post('/Fish_Edit/{id}','FishController@realedit');

Route::get('/Fish_Delete/{id}','FishController@delete');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
