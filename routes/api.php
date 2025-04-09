<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActividadesController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('auth')->group(function () {
    Route::post('/login', [AuthController::class, 'login']); // público

    // protegidas por middleware JWT
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
});


Route::controller(ActividadesController::class)->group(function () {

    Route::get('/tareas','index')->name('tareas.index');
    Route::post('/tarea','store')->name('tarea.store');
    Route::get('/tarea/{id}','show')->name('tarea.show');
    Route::put('/tarea/{id}','update')->name('tarea.update');
    Route::delete('/tarea/{id}','destroy')->name('tarea.destroy');
});


Route::controller(UserController::class)->group(function () {
    // Route::get('/users','UserController@index')->name('productos.index');
    Route::get('/users','index')->name('users.index');
    // Route::post('/producto','store')->name('producto.store');
    Route::get('/producto/{id}','show')->name('producto.show');
    // Route::put('/producto/{id}','update')->name('producto.update');
    Route::delete('/producto/{id}','delete')->name('producto.delete');
});