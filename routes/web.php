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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@index')->name('home');

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'MainPagesController@dashboard')->name('admin.dashboard');
    Route::get('/main', 'MainPagesController@index')->name('admin.main');
    Route::put('/main', 'MainPagesController@update')->name('admin.main.update');
    Route::get('/services/create', 'ServicePagesController@create')->name('admin.services.create');
    Route::post('/services/create', 'ServicePagesController@store')->name('admin.services.store');
    Route::get('/services/list', 'ServicePagesController@list')->name('admin.services.list');
    Route::get('/services/edit/{id}', 'ServicePagesController@edit')->name('admin.services.edit');
    Route::post('/services/update/{id}', 'ServicePagesController@update')->name('admin.services.update');
    Route::delete('/services/destroy/{id}', 'ServicePagesController@destroy')->name('admin.services.destroy');
    Route::get('/portfolios/create', 'PortfolioPagesController@create')->name('admin.portfolios.create');
    Route::put('/portfolios/create', 'PortfolioPagesController@store')->name('admin.portfolios.store');
    Route::get('/portfolios/list', 'PortfolioPagesController@list')->name('admin.portfolios.list');
    Route::get('/portfolios/edit/{id}', 'PortfolioPagesController@edit')->name('admin.portfolios.edit');
    Route::post('/portfolios/update/{id}', 'PortfolioPagesController@update')->name('admin.portfolios.update');
    Route::delete('/portfolios/destroy/{id}', 'PortfolioPagesController@destroy')->name('admin.portfolios.destroy');
    Route::get('/abouts/create', 'AboutPagesController@create')->name('admin.abouts.create');
    Route::put('/abouts/create', 'AboutPagesController@store')->name('admin.abouts.store');
    Route::get('/abouts/list', 'AboutPagesController@list')->name('admin.abouts.list');
    Route::get('/abouts/edit/{id}', 'AboutPagesController@edit')->name('admin.abouts.edit');
    Route::post('/abouts/update/{id}', 'AboutPagesController@update')->name('admin.abouts.update');
    Route::delete('/abouts/destroy/{id}', 'AboutPagesController@destroy')->name('admin.abouts.destroy');
});

Route::post('/contact','ContactFormController@store')->name('contact.store');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
