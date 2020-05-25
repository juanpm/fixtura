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

Route::apiResource('olimpiadas', 'OlimpiadaController');
Route::apiResource('disciplinas', 'DisciplinaController');
Route::apiResource('equipos', 'EquipoController');
Route::apiResource('desafios', 'DesafioController');
Route::apiResource('carreras', 'CarreraController');
Route::apiResource('seccionperiodos', 'SeccionperiodoController');
Route::apiResource('personas', 'PersonaController');
Route::apiResource('matriculas', 'MatriculaController');
Route::apiResource('competidorequipos', 'CompetidorequipoController');