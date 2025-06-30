<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('home');
})->name("home");

// User Controller
Route::resource("users", UserController::class);

// Task Controller
Route::resource("tasks", TaskController::class);

// Login
Route::get("/login", [AuthController::class, "showLogin"])->name("show.login");
Route::post("/login", [AuthController::class, "login"])->name("login");

// Register
Route::get("/register", [AuthController::class, "showRegister"])->name("show.register");
Route::post("/register", [AuthController::class, "register"])->name("register");

// Logout
Route::post("/logout", [AuthController::class, "logout"])->name("logout");

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
