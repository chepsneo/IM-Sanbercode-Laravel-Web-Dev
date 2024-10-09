<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\authController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/register', [authController::class, 'register'] );

route::post('/send', [authController::class, 'send'] );
