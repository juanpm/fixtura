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

//Route::apiResource('olimpiadas', 'OlimpiadaController');
//Route::apiResource('matriculas', 'MatriculaController');
//Route::apiResource('competidorequipos', 'CompetidorequipoController');
//Route::apiResource('users', 'UserController');
//Route::apiResource('rols', 'RolController');
//Route::apiResource('usuariorols', 'UsuariorolController');

Route::group([

    'middleware' => ['api', 'cors'],
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    //////////////En aqui se definen las rutas para cad tabla///////////////////
    Route::apiResource('olimpiadas', 'OlimpiadaController');
    Route::apiResource('carreras', 'CarreraController');
    Route::apiResource('seccionperiodos', 'SeccionperiodoController');
    Route::get('personas/android', 'PersonaController@index_android');
    Route::apiResource('personas', 'PersonaController');
    Route::apiResource('desafios', 'DesafioController');
    Route::apiResource('carreras', 'CarreraController');
    Route::apiResource('seccionperiodos', 'SeccionperiodoController');
    Route::apiResource('disciplinas', 'DisciplinaController');
    Route::apiResource('equipos', 'EquipoController');
    Route::apiResource('users', 'UsuarioController');
    Route::apiResource('rols', 'RolController');
    Route::apiResource('usuariorols', 'UsuariorolController');
    Route::apiResource('matriculas', 'MatriculaController');
    Route::apiResource('competidorequipos', 'CompetidorequipoController');
    ///////////////////////////////////////////////////////////////////////////
});
