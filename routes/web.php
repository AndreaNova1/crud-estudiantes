<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudianteController;

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

Route::resource('/estudiante',\App\Http\Controllers\EstudianteController::class);
//Guardar Datos Estudiantes
Route::post('/save','EstudianteController@save')->name('save');
//editar
Route::get('index/edit/{id}','EstudianteController@edit')->name('edit');
Route::delete('index/delete/{id}','EstudianteController@delete')->name('delete');

