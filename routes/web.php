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
Route::get('/contact', 'ContactController');
Route::get('/review-lenovo-thinkpad-p15s-laptop-workstation-kelas-terjangkau', 'ArticleController@article1');
Route::get('/preview-snapdragon-662-smartphone-murah-jadi-makin-seru', 'ArticleController@article2');
Route::get('/hands-on-samsung-galaxy-watch3-premium-kaya-fitur', 'ArticleController@article3');
Route::get('/review-sennheiser-cx-400bt-tws', 'ArticleController@article4');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
