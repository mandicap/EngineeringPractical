<?php

use App\Http\Controllers\WeatherDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', WeatherDashboardController::class)->name('home');
