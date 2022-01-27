<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\StudyController;

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
// con apiResource los métodos: Get, Post, Update y Delete se crean de forma dinámica

 Route::apiResource('departments', DepartmentController::class);
 Route::apiResource('employees', EmployeeController::class);
 Route::apiResource('studies', StudyController::class);
