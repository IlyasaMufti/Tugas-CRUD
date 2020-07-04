<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PertanyaanController@index');

Route::get('/pertanyaan','PertanyaanController@index');

Route::get('/pertanyaan/create','PertanyaanController@create');

Route::POST('/pertanyaan', 'PertanyaanController@store');

Route::POST('/jawaban/{pertanyaan_id}', 'JawabanController@store');

Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@index');

Route::get('/pertanyaan/{pertanyaan_id}' ,'PertanyaanController@show');

Route::get('/pertanyaan/{id}/edit', 'PertanyaanController@edit');

Route::put('/pertanyaan/{pertanyaan_id}' ,'PertanyaanController@update');

Route::DELETE('/pertanyaan/{pertanyaan_id}','PertanyaanController@delete');
