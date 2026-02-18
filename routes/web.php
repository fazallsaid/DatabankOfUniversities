<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UniversitiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocumentationController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/contribute', [HomeController::class, 'contribute']);
Route::get('/docs', [DocumentationController::class, 'index']);
Route::get('/docs/usage', [DocumentationController::class, 'usage']);
Route::get('/docs/data', [DocumentationController::class, 'data']);


//ACCOUNT SIDE
Route::prefix('account')->group(function (){

    //LOGIN
    Route::get('/signin', [AuthController::class, 'indexLogin']);
    Route::post('/signin/check', [AuthController::class, 'login']);
    Route::get('/signup', [AuthController::class, 'indexReg']);
    Route::post('/signup/check', [AuthController::class, 'register']);
    Route::get('/logout', [AuthController::class, 'logout']);

    //DASHBOARD
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/universities', [UniversitiesController::class, 'index']);
});