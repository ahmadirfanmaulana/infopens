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

Route::get('/event/list', 'EventController@_list')->name('event_list');
Route::get('/event/detail/{id}', 'EventController@detail')->name('event_detail');
Route::get('/tulisan/list', 'TulisanController@_list')->name('tulisan_list');
Route::get('/tulisan/detail/{id}', 'TulisanController@detail')->name('tulisan_detail');
Route::get('/partner/list', 'PartnerController@_list')->name('partner_list');
Route::get('/partner/detail/{id}', 'PartnerController@detail')->name('partner_detail');
