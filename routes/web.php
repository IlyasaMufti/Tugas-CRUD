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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pertanyaan','PertanyaanController@index');

Route::get('/pertanyaan/create','PertanyaanController@create');

Route::POST('/pertanyaan', 'PertanyaanController@list');

Route::POST('/jawaban/{id_pertanyaan}','JawabanController@store');