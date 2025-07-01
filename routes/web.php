<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home page (empty)
Route::get('/', function () {
    return view('home');
})->name("home");

// User Controller
Route::middleware("auth")->resource("users", UserController::class);

// Task Controller
Route::middleware("auth")->resource("tasks", TaskController::class);

Route::middleware("guest")->group(function () {
    // Login
    Route::get("/login", [AuthController::class, "showLogin"])->name("show.login");
    Route::post("/login", [AuthController::class, "login"])->name("login");
    
    // Register
    Route::get("/register", [AuthController::class, "showRegister"])->name("show.register");
    Route::post("/register", [AuthController::class, "register"])->name("register");
});

// Logout
Route::post("/logout", [AuthController::class, "logout"])->name("logout");