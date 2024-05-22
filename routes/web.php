<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('home');
});

Route::get('/reg', [RegController::class, 'store'])->name('reg');
Route::post('/reg', [RegController::class, 'create']);

Route::get('/log', [AuthController::class, 'store'])->name('log');
Route::post('/log', [AuthController::class, 'create']);

