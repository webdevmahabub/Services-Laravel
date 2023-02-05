<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\DependencyInjection\RoutingResolverPass;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\HomeController;

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

// Home Route
 Route::get('/', [HomeController::class, 'Home'])->name('home');
 Route::get('/contact', [HomeController::class, 'Contact'])->name('contact');
 Route::get('/about', [HomeController::class, 'About'])->name('home');
 Route::get('/terms', [HomeController::class, 'Terms'])->name('terms');
