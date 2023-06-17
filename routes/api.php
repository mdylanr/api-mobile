<?php

use App\Http\Controllers\Api\ApiController;
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

Route::post('/login', [ApiController::class, 'login']);
Route::post('/register', [ApiController::class, 'register']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [ApiController::class, 'user']);
    Route::post('/user', [ApiController::class, 'updateUser']);
    Route::get('/products', [ApiController::class, 'products']);
    Route::get('/categories', [ApiController::class, 'categories']);
    Route::get('/home', [ApiController::class, 'home']);
});
