<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StreetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;



Route::get("/street",[StreetController::class, 'getstreet']);
Route::get("/",[StreetController::class, 'geteventiva'])->name('home');
Route::get("/signin",[AuthController::class, 'loginForm'])->name('website');
Route::get("/signup",[AuthController::class, 'registerForm'])->name('websitereg');
Route::get("/contact",[PagesController::class,'contact'])->name('contactus');
Route::get("/venue",[PagesController::class,'venue'])->name('venue');
Route::post("/register",[AuthController::class,'signup'])->name('signup');
Route::post("/signin",[AuthController::class,'signin'])->name('login');
Route::get("/dashboard",[StreetController::class, 'dashboard'])->name('dashboard');
Route::post("/logout",[AuthController::class, 'logout'])->name('logout');
Route::get("/edituser/{id}",[StreetController::class, 'edituser'])->name('edituser');
Route::delete("/deleteuser/{id}",[StreetController::class, 'deleteuser'])->name('deleteuser');
Route::put("/updateuser/{id}",[StreetController::class, 'updateuser'])->name('updateuser');
Route::post("/restore_user/{id}",[StreetController::class, 'restore_user'])->name('restore_user');


