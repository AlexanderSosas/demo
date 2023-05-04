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



Route::resource('empresas', 'App\Http\Controllers\EmpresasController');

Route::get('/demo/api/list-empresas', [EmpresaController::class, 'getEmpresas']);
Route::get('/demo/api/list-empresasbyid/{id}', [EmpresaController::class, 'getEmpresasById']);
Route::post('/demo/api/create-empresas', [EmpresaController::class, 'newEmpresa']);
Route::put('/demo/api/update-empresas/{id}', [EmpresaController::class, 'updateEmpresa']);
Route::delete('/demo/api/delete/{id}', [EmpresaController::class, 'deleteEmpresa']);





