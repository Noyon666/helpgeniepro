<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/platform', [PageController::class, 'platform'])->name('platform');
Route::get('/solutions', [PageController::class, 'solutions'])->name('solutions');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/integrations', [PageController::class, 'integrations'])->name('integrations');
Route::get('/resources', [PageController::class, 'resources'])->name('resources');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'submitContact'])->name('contact.submit');

Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/cookies', [PageController::class, 'cookies'])->name('cookies');
