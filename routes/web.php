<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect('/login');
});

Auth::routes([
    'register'=>false,
    'verify'=>false,
    'reset'=>false,
    'confirm'=>false
]);
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::middleware('auth')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::name('admin.')->group(function(){
            /* DASHBOARD */
            Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
            
            /* PENDUDUK */
            Route::get('/penduduk','PendudukController@index')->name('penduduk.index');
            Route::get('/penduduk/create','PendudukController@create')->name('penduduk.create');
            Route::post('/penduduk','PendudukController@store')->name('penduduk.store');
            Route::get('/penduduk/{id}','PendudukController@show')->name('penduduk.show');
            Route::get('/penduduk/{id}/edit','PendudukController@edit')->name('penduduk.edit');
            Route::put('/penduduk/{id}','PendudukController@update')->name('penduduk.update');
            Route::get('/penduduk/{id}/destroy','PendudukController@destroy')->name('penduduk.destroy');
            
            /* USER */
            Route::get('/user','UserController@index')->name('user.index');
            Route::get('/user/create','UserController@create')->name('user.create');
            Route::post('/user','UserController@store')->name('user.store');
            Route::get('/user/{id}','UserController@show')->name('user.show');
            Route::get('/user/{id}/edit','UserController@edit')->name('user.edit');
            Route::put('/user/{id}','UserController@update')->name('user.update');
            Route::get('/user/{id}/destroy','UserController@destroy')->name('user.destroy');

        });
    });
});

// Route::get('/home', 'HomeController@index')->name('home');
