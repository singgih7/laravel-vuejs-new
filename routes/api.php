<?php

use Illuminate\Http\Request;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\LevelController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\MasterAnggaranController;
use App\Http\Controllers\API\ListAnggaranController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/level', function (Request $request) {
    return $request->level();
});

Route::middleware('auth:api')->get('/masterAnggaran', function (Request $request) {
    return $request->masterAnggaran();
});

Route::middleware('auth:api')->get('/listAnggaran', function (Request $request) {
    return $request->listAnggaran();
});

Route::get('ambildatalevel',  [LevelController::class, 'index']);
Route::get('ambildatamaster',  [MasterAnggaranController::class, 'index']);

Route::apiResources([
    'user' => UserController::class,
    'level' => LevelController::class,
    'masterAnggaran' => MasterAnggaranController::class,
    'listAnggaran' => ListAnggaranController::class,
]);
