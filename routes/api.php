<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => ['auth-sanctum']], function () {
Route::get('/siswa', [SiswaController::class, 'index']);
Route::post('/siswa', [SiswaController::class, 'store']);
Route::put('/siswa/{id}', [SiswaController::class, 'update']);
Route::get('/siswa/{id}', [SiswaController::class, 'show']);
Route::delete('/siswa/{id}', [SiswaController::class, 'destroy']);
Route::post('/logout', [AuthController::class, 'logout']);
// });
