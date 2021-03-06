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
    return view('client.index');
});

Route::get('dashboard', 'Dashboard\DashboardController@index')->name('dashboard.index');
Route::get('edit', 'Dashboard\DashboardController@edit')->name('dashboard.edit');
Route::get('delete', 'Dashboard\DashboardController@delete')->name('dashboard.delete');
Route::get('login', 'Dashboard\DashboardController@login')->name('login');
Route::get('register', 'Dashboard\DashboardController@register')->name('register');
