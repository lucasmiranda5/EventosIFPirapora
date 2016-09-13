<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/admin', ['as' => 'dashboard','middleware' => 'auth.admin',function () {
    return view('admin.home');
}]);
Route::get('/admin/login', ['as' => 'login.admin',function () {
    return view('admin.login');
   
}]);
Route::post('/admin/login','Admin\ControllerLogin@login');
