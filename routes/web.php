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
//Formulario de Monedas
//Route::get('/criptomoneda/form', 'MonedaController@formMoned');
//Guardar Monedas
//Route::post('/criptomoneda/save','MonedaController@save')->name('save');
//Eliminar Usuarios
//Route::delete('/criptomoneda/delete/{id}','MonedaController@delete')->name('delete');
//Formulario para editar usuarios
//Route::post('/criptomoneda/editMoneda/{id}','MonedaController@editMoneda')->name('editMoneda');
//Edicion de usuarios
//Route::post('/criptomoneda/edit/{id}','MonedaController@edit')->name('edit');


