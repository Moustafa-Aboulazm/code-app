<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');

Route::resource('/portfolios', PortfolioController::class)->only(['index', 'show']);

Route::get('/about', AboutController::class)->name('about');

Route::resource('/contact-us', ContactUsController::class)->only(['index', 'store']);


