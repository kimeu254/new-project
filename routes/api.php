<?php

use App\Http\Controllers\FacultiesController;
use App\Http\Controllers\CoursesController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/faculties', [FacultiesController::class, 'index']);
Route::post('/faculty', [FacultiesController::class, 'store']);
Route::put('/faculty/{id}',[FacultiesController::class,'update']);
Route::delete('/faculty/{id}',[FacultiesController::class,'destroy']);

Route::get('/courses', [CoursesController::class, 'index']);
Route::post('/course', [CoursesController::class, 'store']);
Route::put('/course/{id}',[CoursesController::class,'update']);
Route::delete('/course/{id}',[CoursesController::class,'destroy']);