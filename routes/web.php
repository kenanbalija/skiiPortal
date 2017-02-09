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


Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');
Route::get('/home', function(){
  return redirect()->action('HomeController@index');
});

Route::get('/galerija', 'GalleryController@index');
Route::post('/galerija/save', 'GalleryController@save');
Route::post('/galerija/delete/{id}', 'GalleryController@delete');
Route::get('/galerija/view/{id}', 'GalleryController@view');
Route::post('image/do-upload', 'GalleryController@do_image_upload');


Route::get('/novosti', 'NewsController@index');
Route::get('/novosti/write', 'NewsController@write');
Route::get('/novosti/update/{id}', 'NewsController@news_get');
Route::post('/novosti/save', 'NewsController@save');
Route::post('/novosti/update/save/{id}', 'NewsController@update');
Route::post('/novosti/update/delete/{id}', 'NewsController@delete');

Route::get('/rezultati', 'ResultsController@index');
Route::get('/rezultati/add', 'ResultsController@add');
Route::post('/rezultati/save', 'ResultsController@save');
Route::get('/rezultati/edit/{id}', 'ResultsController@edit');
Route::post('/rezultati/update/{id}', 'ResultsController@update');
Route::post('/rezultati/delete/{id}', 'ResultsController@delete');


Route::get('/sponzori', 'SponsorController@index');
Route::get('/sponzori/add', 'SponsorController@add');
Route::post('/sponzori/save', 'SponsorController@save');
Route::post('/sponzori/delete/{id}', 'SponsorController@delete');

Route::post('/sendform', 'MailController@send');
