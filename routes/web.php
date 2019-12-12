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

Route::get('/Models', 'FrontController@models');
Route::get('/EnModels', 'FrontController@EnModels');

Route::get('/ModelsVip', 'FrontController@modelsVip');

Route::get('/Price', 'FrontController@price');
Route::get('/EnPrice', 'FrontController@EnPrice');


Route::get('/Services', 'FrontController@services');
Route::get('/EnServices', 'FrontController@EnServices');


Route::get('/ShowModel/{id}', 'FrontController@showModel');
Route::get('/EnShowModel/{id}', 'FrontController@EnShowModel');



Route::get('/ShowModelVip/{id}', 'FrontController@showModelVip');

Route::get('/About', 'FrontController@about');
Route::get('/EnAbout', 'FrontController@EnAbout');


Route::get('/Vacancy', 'FrontController@vacancy');
Route::get('/EnVacancy', 'FrontController@EnVacancy');

Route::get('/Contacts', 'FrontController@contacts');
Route::get('/EnContacts', 'FrontController@EnContacts');


Auth::routes();
Route::get('Logout', 'Auth\LoginController@logout');
// запрет регистрации
//Route::match(['GET', 'POST'], 'register', function()
//{
//    return redirect('/');
//});
Route::get('/Home', 'HomeController@index')->name('home');
Route::prefix('Admin')->middleware('auth')->group(function (){
    Route::get('/', 'AdminController@menu');
    Route::get('/ModelsA', 'AdminController@modelsA');
    Route::get('/AlbumA', 'AdminController@albumA');
    Route::get('/ModelsAV', 'AdminController@modelsAV');
    Route::get('/AdminModel/{id}', 'AdminController@adminModel');
    Route::post('/Save', 'AdminController@update');
    Route::get('/Delete','AdminController@delete');

});

