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

Route::get('/','LoginController@Login');
Route::get('/home','PrincipalController@principal');
Route::get('/cadastro','ClienteController@cliente');
Route::get('/medicamento','CadMedController@cadastrar');
Route::get('/usuario','CadUserController@caduser');
Route::post('logar', 'PrincipalController@principal')->name('logar');
   
/*
Route::get('/', function () {
    return view('welcome');
});
*/