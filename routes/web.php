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

/* Route::get('/', function () {
    return view('evento.index');
})->middleware("auth"); */

Route::get('/', function () {
    return view('evento.indexUser');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/evento', [App\Http\Controllers\EventoController::class, 'index']);
    Route::post('/evento/agregar', [App\Http\Controllers\EventoController::class, 'store']);
    Route::post('/evento/mostrar', [App\Http\Controllers\EventoController::class, 'show']);
    Route::post('/evento/editar/{id}', [App\Http\Controllers\EventoController::class, 'edit']);
    Route::post('/evento/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroy']);
    Route::post('/evento/actualizar/{evento}', [App\Http\Controllers\EventoController::class, 'update']);

});

Route::get('/eventoUser', [App\Http\Controllers\EventoController::class, 'indexUser']);
Route::post('/eventoUser/agregar', [App\Http\Controllers\EventoController::class, 'storeUser']);
Route::post('/eventoUser/mostrar', [App\Http\Controllers\EventoController::class, 'showUser']);
Route::post('/eventoUser/editar/{id}', [App\Http\Controllers\EventoController::class, 'editUser']);
Route::post('/eventoUser/borrar/{id}', [App\Http\Controllers\EventoController::class, 'destroyUser']);
Route::post('/eventoUser/actualizar/{eventoUser}', [App\Http\Controllers\EventoController::class, 'updateUser']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');