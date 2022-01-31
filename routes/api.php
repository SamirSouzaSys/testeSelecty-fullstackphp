<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\ExperienciaProfissionalController;
use App\Http\Controllers\API\FormacaoAcademicaController;
use App\Http\Controllers\API\UsuarioController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    // return $request->user();
// });


Route::get('usuario',                  [UsuarioController::class, 'index']);
Route::group(['prefix' => 'usuario'], function () {
    Route::post('add',                 [UsuarioController::class, 'add']);
    Route::get('edit/{id}',            [UsuarioController::class, 'edit']);
    Route::post('update/{id}',         [UsuarioController::class, 'update']);
    Route::delete('delete/{id}',       [UsuarioController::class, 'delete']);
    Route::get('formacoes/{id}',      [UsuarioController::class, 'formacoes']);
    Route::get('experiencias/{id}',   [UsuarioController::class, 'experiencias']);
});

Route::get('experienciaProfissional', [ExperienciaProfissionalController::class, 'index']);
Route::group(['prefix' => 'experienciaProfissional'], function () {
    Route::post('add',                [ExperienciaProfissionalController::class, 'add']);
    Route::get('edit/{id}',           [ExperienciaProfissionalController::class, 'edit']);
    Route::post('update/{id}',        [ExperienciaProfissionalController::class, 'update']);
    Route::delete('delete/{id}',      [ExperienciaProfissionalController::class, 'delete']);
});

Route::get('formacaoAcademica',  [FormacaoAcademicaController::class, 'index']);
Route::group(['prefix' => 'formacaoAcademica'], function () {
    Route::post('add',           [FormacaoAcademicaController::class, 'add']);
    Route::get('edit/{id}',      [FormacaoAcademicaController::class, 'edit']);
    Route::post('update/{id}',   [FormacaoAcademicaController::class, 'update']);
    Route::delete('delete/{id}', [FormacaoAcademicaController::class, 'delete']);
});