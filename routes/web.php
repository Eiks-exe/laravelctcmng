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

Route::get('/contact' , 'ContactController@index')->name('contact.index');
Route::get('/contacts' , 'ContactController@test');
Route::get('/contact/edit/{id}' , 'ContactController@edit')->where('id', '[0-9]+')->name('contact.edit');
Route::put('/contact/edit/{id}' , 'ContactController@putEdit')->where('id', '[0-9]+')->name('contact.putEdit');

Route::get('/contact/delete/{id}' , 'ContactController@delete')->name('contact.delete');
Route::get('/contact/create' , 'ContactController@create')->name('contact.create');
Route::post('/contact/create' , 'ContactController@postCreate')->name('contact.postCreate');

Route::get('/api/contact', 'contact@getContacts');
