<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BrokerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserMessageController;



Route::group(['middleare' => 'guest'], function(){
    Route::post('/reg', [RegController::class, 'create'])->name('reg');
    Route::post('/log', [RegController::class, 'loginForm'])->name('login.form');
});

Route::get('/logout', [RegController::class, 'logout'])->name('logout');

Route::get('/profile', function(){
    return view('profile');
})->name('profile');

Route::get('/', function(){
    return view('home');
});


Route::get('/catalog', [ItemController::class, 'show'])->name('posts.index');
Route::get('/item{post}/open', [ItemController::class, 'open'])->name('posts.item');
Route::post('/message', [UserMessageController::class, 'message'])->name('message');

Route::get('/create', [AdminController::class, 'show'])->middleware('admin');
Route::get('/adminpanel', [AdminController::class, 'adminpanel'])->middleware('admin')->name('posts.admin');

Route::get('/adminpanel', [AdminController::class, 'show_post'])->middleware('admin');

Route::get('/profile', [UserMessageController::class , 'profile'])->name('profile');


Route::get('destroy_app/{id}', [AdminController::class, 'destroy_app'])->name('destroy_app');

Route::post('/createbroker', [AdminController::class, 'broker_create'])->name('broker.reg');
Route::get('/users', [AdminController::class, 'users_create'])->name('users');
Route::get('destroy/{id}', [AdminController::class, 'destroy'])->name('users.destroy');

Route::get('/add', [BrokerController::class, 'show'])->middleware('broker');
Route::post('/add', [BrokerController::class, 'add'])->name('add');