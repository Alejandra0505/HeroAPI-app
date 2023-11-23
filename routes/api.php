<?php

use App\Http\Controllers\GrupoController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\MisionesController;
use App\Http\Controllers\PoderController;
use App\Http\Controllers\PoderhController;
use App\Http\Controllers\TipomisionController;
use App\Models\grupo;
use Database\Factories\MisionesFactory;
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

Route::apiResource('Hero',HeroController::class);
Route::apiResource('grupo',GrupoController::class);
Route::apiResource('misiones',MisionesController::class);
Route::apiResource('poder',PoderController::class);
Route::apiResource('poderh', PoderhController::class);
Route::apiResource('tipomision', TipomisionController::class);