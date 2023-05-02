<?php

namespace App\Http\Controllers;



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


//$router->get('/demo/list-empresas', ['uses' => 'alexController@index']);
Route::get('/demo/list-empresas', [EmpresaController::class, 'getEmpresas']);
Route::get('/users', 'App\Http\Controllers\UserController@index');
//  $router->get('/User',  [ 'uses' => 'UserController@getUsers' ] );



// $router->get('/demo/list-empresas', ['uses' => 'empresaController@getEmpresas']);



