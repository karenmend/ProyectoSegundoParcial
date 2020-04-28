<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api', 'repartidorapi')->get('/servicio', 
function (Request $request) {
    return ['mensaje' => 'Bienvenido.'];
});

Route::get('/solorepartidores', 
    function(){
        return ['mensaje' => 'Este servicio es solo para repartidores.'];
    })->name('api.solorepartidores');

    
Route::apiResource('tareaMantenimiento', 'TareasApiController');
Route::apiResource('tareaCapturar', 'TareaCapturarController');

Route::get('/validate-token', function () {
    return ['data' => 'Token is valid'];
})->middleware('auth:api');