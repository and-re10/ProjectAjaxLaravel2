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
    return view('index');
});

// Modal Add Utilisateurs
// Route::get('/users', 'UsersController@index');

// Route::post('/usersadd', 'UsersController@store');

Route::resource('/users', 'UsersController');

