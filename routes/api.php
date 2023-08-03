<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\CantonController;
use App\Http\Controllers\API\ParroquiaController;
use App\Http\Controllers\API\ProvinciaController;
use App\Http\Controllers\API\RecintoElectoralController;
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

Route::group(['middleware' => ["auth:sanctum"]], function () {

});

Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::get('canton',[CantonController::class,'index']);
Route::get('parroquia',[ParroquiaController::class,'index']);
Route::get('provincia',[ProvinciaController::class,'index']);
Route::get('recintoelectoral',[RecintoElectoralController::class,'index']);
Route::delete('cantones/{canton}',[CantonController::class,'destroy']);
Route::delete('parroquia/{parroquia}',[ParroquiaController::class,'destroy']);
Route::delete('provincias/{provincia}',[ProvinciaController::class,'destroy']);
Route::delete('recintoelectoral/{recintoelectoral}',[RecintoElectoralController::class,'destroy']);