<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UniversityController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/university', [UniversityController::class, 'get_all']);
Route::post('/university/add', [UniversityController::class, 'add_university']);
Route::post('/university/update/{id}', [UniversityController::class, 'update_university']);
Route::delete('/university/delete/{id}', [UniversityController::class, 'delete_university']);
Route::post('/university/search/province', [UniversityController::class, 'search_university_by_address']);
Route::post('/university/search/name', [UniversityController::class, 'search_university_by_univ']);