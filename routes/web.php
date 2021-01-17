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

Auth::routes();

Route::get('/home', 'ExpenseController@index')->name('home');

Route::resource('expense', 'ExpenseController')->except(['destroy']); // Creare tutte le rotte per il CRUD di una risorsa
Route::get('/expense/{expense}/delete', 'ExpenseController@destroy');

Route::resource('category', 'CategoryController');
