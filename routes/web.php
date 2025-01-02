<?php

use App\Http\Middleware\CorsMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Auth::routes();

// Home and Messages Routes
Route::middleware(CorsMiddleware::class)->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/messages', [HomeController::class, 'messages'])->name('messages');
    Route::post('/message', [HomeController::class, 'message'])->name('message');

});

