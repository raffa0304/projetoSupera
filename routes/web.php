<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\CarController;

Route::get('/',  [CarController::class, 'index1']);
Route::get('/home', [CarController::class, 'index']);
Route::get('/registers/register', [CarController::class, 'register']);
Route::post('/registers', [CarController::class, 'store']);
Route::post('/cars', [CarController::class, 'storeReview']);
Route::get('/cars/yourCars', [CarController::class, 'yourCars']);
Route::get('/cars/{id}', [CarController::class, 'show']);
Route::delete('/cars/{id}', [CarController::class, 'destroy']);
Route::delete('/home/{id}', [CarController::class, 'destroyReview']);
Route::get('/cars/edit/{id}', [CarController::class, 'edit']);
Route::put('/cars/update/{id}', [CarController::class, 'update']);
  
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

