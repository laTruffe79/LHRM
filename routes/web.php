<?php

use App\Http\Controllers\PlanningController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth:sanctum', 'verified'])
    ->name('dashboard');

/* Protected Resources */
Route::middleware(['auth:sanctum', 'verified'])->group(function (){
    Route::resources([
        'users' => UserController::class,
    ]);
    Route::get('planning/{id}', [PlanningController::class, 'index']);
});

