<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Home\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home');
