<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {return view('home');})->name("home");

// Public routes
Route::middleware("guest")->group(function () {
    // Login
    Route::get("/login", [AuthController::class, "showLogin"])->name("show.login");
    Route::post("/login", [AuthController::class, "login"])->name("login");
    
    // Register
    Route::get("/register", [AuthController::class, "showRegister"])->name("show.register");
    Route::post("/register", [AuthController::class, "register"])->name("register");
});

Route::middleware("auth")->group(function () {
    // Admin.User controller
    Route::name('admin.')->group(function () {
        Route::resource('users', UserController::class);
    });
    
    // Task Controller
    Route::resource("tasks", TaskController::class);
});

// Logout
Route::post("/logout", [AuthController::class, "logout"])->name("logout");