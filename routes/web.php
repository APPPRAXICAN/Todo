<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/home', [TaskController::class, 'index'])->name('home');
    Route::resource('/home/task', TaskController::class);
    Route::get('/home/task-check/{id}', [TaskController::class, 'checkTask']);
    Route::post('/logout', [AuthController::class, 'destroy_session']);
    Route::post('/home/search' , [SearchController::class , 'search']);
});




Route::post('/login', [AuthController::class, 'identify'])->name('user.login');
Route::get('/', function () {
    return view('Auth.Login');
})->name('login');

Route::get('/register', function () {
    return view('Auth.register');
})->name('auth.register');
Route::post('/register', [AuthController::class, 'register'])->name('user.register');
