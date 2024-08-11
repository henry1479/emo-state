<?php

use App\Http\Controllers\UserController;
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

Route::controller(UserController::class)
    ->prefix('users')
    ->group(function () {
    Route::get("/gender", "getGenderUsers")->name("users.gender");
    Route::get("/age", "getAgeUsers")->name("users.age");
    Route::get("/city", "getCityUsers" )->name("users.city");
    Route::get("/best_indicators", "getBestUsers" )->name("best_users");
    Route::get("/all", "getAllSelectionUsers" )->name("users.all");
});

