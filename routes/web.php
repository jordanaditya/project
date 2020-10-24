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


Route::get('/homes', 'HomesController');
Route::get('/about', 'AboutController');
Route::get('/preview-snapdragon-662-smartphone-murah-jadi-makin-seru', 'ArticleController@article1');
Route::get('/hands-on-samsung-galaxy-watch3-premium-kaya-fitur', 'ArticleController@article2');
Route::get('/review-sennheiser-cx-400bt-tws', 'ArticleController@article3');

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

Route::get('/manage', 'ManageController@index')->name('manage');
Route::get('/articleAdd','ManageController@add');
Route::post('/articleCreate','ManageController@create');
Route::get('/articleEdit/{id}','ManageController@edit');
Route::post('/articleUpdate/{id}','ManageController@update');
Route::get('/articleDelete/{id}','ManageController@delete');

Route::post('/komentarCreate1', 'ArticleController@create1');
Route::post('/komentarCreate2', 'ArticleController@create2');
Route::post('/komentarCreate3', 'ArticleController@create3');