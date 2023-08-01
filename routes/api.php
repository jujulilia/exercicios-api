<?php

use App\Http\Controllers\ExercicioCinco;
use App\Http\Controllers\ExercicioDois;
use App\Http\Controllers\ExercicioQuatro;
use App\Http\Controllers\ExercicioSeis;
use App\Http\Controllers\ExercicioSete;
use App\Http\Controllers\ExercicioTres;
use App\Http\Controllers\ExercicioUm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('exercicio/um', 
[ExercicioUm::class, 'multiplicar']);

Route::post('exercicio/dois', 
[ExercicioDois::class, 'retornarMaior']);

Route::get('exercicio/sete', 
[ExercicioSete::class, 'exibirNumeros']);

route::post('exercicio/quatro',
[ExercicioQuatro::class, 'verificarNumero']);

route::post('exercicio/tres',
[ExercicioTres::class, 'media']);
