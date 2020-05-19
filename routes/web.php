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


    Route::get('/login','LoginController@view_login');
    Route::post('/login','LoginController@login');
    Route::get('/forgotpassword', 'forgotpasswordController@forgot');
    Route::post('/forgotpassword', 'forgotpasswordController@email');
    Route::get('/recoverpassword', 'forgotpasswordController@change');
    Route::post('/recoverpassword', 'forgotpasswordController@reset');
    

   
  

Route::group(['middleware' => 'auth'], function()
{
    
    Route::get('/home','HomeController@index');

    Route::get('/profile','ProfileController@profile');  
    Route::post('/updatepassword','ProfileController@changePass');
    Route::post('/profile','ProfileController@updateprofile');

    Route::get('/edituser/{id}', 'EdituserController@show');
    Route::post('/edituser/{id}', 'EdituserController@edit');

    Route::get('/logout', 'LoginController@logout');

    Route::get('/delete/{id}', 'DeleteController@delete');
    Route::get('/delete', 'DeleteController@index');
    
    Route::get('/users', 'FetchController@fetch');

    Route::get('/add', 'CreateController@create');
    Route::post('/add', 'CreateController@store');
   
    
    



});



