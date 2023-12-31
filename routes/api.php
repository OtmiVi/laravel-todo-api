<?php

use App\Http\Controllers\TaskApiController;
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


Route::apiResource('tasks', TaskApiController::class);
Route::patch('/tasks/status/{task}', [TaskApiController::class, 'changeStatus']);
