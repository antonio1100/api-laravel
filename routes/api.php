<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(UserController::class)->group(function () {
    // Route::get('/users','UserController@index')->name('productos.index');
    Route::get('/users','index')->name('users.index');
    // Route::post('/producto','store')->name('producto.store');
    Route::get('/producto/{id}','show')->name('producto.show');
    // Route::put('/producto/{id}','update')->name('producto.update');
    Route::delete('/producto/{id}','delete')->name('producto.delete');
});