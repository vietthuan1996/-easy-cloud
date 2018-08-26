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
Route::get('/dichvu', 'Controller@service')->name('service');
Route::get('/dichvu/:slug', 'Controller@solutionDetail')->name('service.detail');

// Management information admin routes
Route::get('/forgot', 'Auth\AdminLoginController@showForgotForm')->name('forgot');
Route::post('/password/email', 'Auth\AdminLoginController@sendResetLinkEmail')->name('password.email');

// Admin routes
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@dashboard')->name('admin');
    Route::post('/', 'AdminController@editInformation')->name('admin.editInformation');
    Route::get('/dichvu', 'AdminController@service')->name('admin.service');
    Route::get('/dichvu/them', 'AdminController@createService')->name('admin.service.create');
    Route::get('/dichvu/sua/{id}', 'AdminController@createService')->name('admin.service.edit');
    Route::post('/dichvu/luu', 'AdminController@saveService')->name('admin.service.save');
    Route::get('/dichvu/xoa/{id}', 'AdminController@removeService')->name('admin.service.delete');
    Route::get('/giaiphap', 'AdminController@solution')->name('admin.solution');
    Route::get('/giaiphap/them', 'AdminController@createSolution')->name('admin.solution.create');
    Route::get('/giaiphap/sua/{id}', 'AdminController@createSolution')->name('admin.solution.edit');
    Route::post('/giaiphap/luu', 'AdminController@saveSolution')->name('admin.solution.save');
    Route::get('/giaiphap/xoa/{id}', 'AdminController@removeSolution')->name('admin.solution.delete');
    Route::get('/lienhe', 'AdminController@requestAdvisory')->name('admin.requestAdvisory');
    Route::get('/lienhe/xoa/{id}', 'AdminController@removeRequestAdvisory')->name('admin.requestAdvisory.delete');
    Route::get('/thongtincanhan', 'AdminController@adminInformation')->name('admin.adminInformation');
    Route::post('/thaydoimatkhau', 'AdminController@changePassword')->name('admin.changePassword');

});
