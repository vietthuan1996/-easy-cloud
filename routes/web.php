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

Route::get('/', 'Controller@index')->name('home');
Route::get('/lienhe', 'Controller@contact')->name('contact');
Route::get('/giaiphap', 'Controller@solution')->name('solution');
Route::get('/giaiphap/:slug', 'Controller@solutionDetail')->name('solution.detail');
Route::get('/congnghe', 'Controller@service')->name('service');
Route::get('/congnghe/:slug', 'Controller@solutionDetail')->name('service.detail');

// Admin routes
Route::prefix('admin')->group(function() {
    Route::get('/', 'AdminController@dashboard')->name('admin');
    Route::post('/', 'AdminController@editInformation')->name('admin.editInformation');
    Route::get('/dichvu', 'AdminController@service')->name('admin.service');
    Route::post('/dichvu/them', 'AdminController@createService')->name('admin.service.create');
    Route::get('/dichvu/sua', 'AdminController@createService')->name('admin.service.edit');
    Route::get('/giaiphap', 'AdminController@solution')->name('admin.solution');
    Route::get('/giaiphap/them', 'AdminController@createSolution')->name('admin.solution.create');
    Route::get('/giaiphap/sua/{id}', 'AdminController@createSolution')->name('admin.solution.edit');
    Route::post('/giaiphap/luu', 'AdminController@saveSolution')->name('admin.solution.save');
    Route::get('/lienhe', 'AdminController@requestAdvisory')->name('admin.requestAdvisory');
});
