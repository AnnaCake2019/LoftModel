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

use Illuminate\Support\Facades\DB;

Route::get('/', 'FrontController@index');
Route::get('/models', 'FrontController@models');
Route::get('/modelsVip', 'FrontController@modelsVip');
Route::get('/price', 'FrontController@price');
Route::get('/services', 'FrontController@services');
Route::get('/showModel/{id}', 'FrontController@showModel');
Route::get('/showModelVip/{id}', 'FrontController@showModelVip');
Route::get('/about', 'FrontController@about');
Route::get('/vacancy', 'FrontController@vacancy');
Route::get('/contacts', 'FrontController@contacts');

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
// запрет регистрации
//Route::match(['GET', 'POST'], 'register', function()
//{
//    return redirect('/');
//});
Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', 'AdminController@menu');
    Route::get('/modelsA', 'AdminController@modelsA');
    Route::get('/albumA', 'AdminController@albumA');
    Route::get('/modelsAV', 'AdminController@modelsAV');
    Route::get('/adminModel/{id}', 'AdminController@adminModel');
    Route::post('/save', 'AdminController@update');
    Route::get('/delete','AdminController@delete');

});

