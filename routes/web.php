<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocumentationController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/contribute', [HomeController::class, 'contribute']);
Route::get('/docs', [DocumentationController::class, 'index']);
Route::get('/docs/usage', [DocumentationController::class, 'usage']);
Route::get('/docs/data', [DocumentationController::class, 'data']);

//USER LOGIN
Route::get('/signin', [AuthController::class, 'indexLogin']);
Route::post('/signin/check', [AuthController::class, 'login']);
Route::get('/signup', [AuthController::class, 'indexReg']);
Route::post('/signup/check', [AuthController::class, 'register']);


//DASHBOARD
Route::prefix('dashboard')->group(function () {
    Route::get('/', DashboardController::class, 'index');
});