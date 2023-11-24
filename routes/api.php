<?php

use App\Http\Controllers\API\AuthController;
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

Route::middleware("general")->group(function () {
    Route::apiResource('Hero',HeroController::class);
    Route::apiResource('grupo',GrupoController::class);
    Route::apiResource('misiones',MisionesController::class);
    Route::apiResource('poder',PoderController::class);
    Route::apiResource('poderh', PoderhController::class);
    Route::apiResource('tipomision', TipomisionController::class);
});


Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});