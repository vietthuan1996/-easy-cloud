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

Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@dashboard')->name('admin');
    Route::get('/dichvu', 'AdminController@service')->name('admin.service');
    Route::get('/dichvu/them', 'AdminController@createService')->name('admin.service.create');
    Route::get('/dichvu/sua', 'AdminController@editService')->name('admin.service.edit');
    Route::get('/giaiphap', 'AdminController@solution')->name('admin.solution');
    Route::get('/giaiphap/them', 'AdminController@createSolution')->name('admin.solution.create');
    Route::get('/giaiphap/sua', 'AdminController@editSolution')->name('admin.solution.edit');
    Route::get('/lienhe', 'AdminController@requestAdvisory')->name('admin.requestAdvisory');
    Route::get('/tab/them', 'AdminController@createTab')->name('admin.tab.create');
});
