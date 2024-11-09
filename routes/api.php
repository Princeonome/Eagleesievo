<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function (){
    Route::apiResource('employee', EmployeeController::class);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/users',[AuthController::class,'users']);
});



// Route::apiResource
