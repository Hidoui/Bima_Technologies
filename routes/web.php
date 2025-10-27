<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;

Route::get('/', [UserController::class, 'home'])->name('user.home');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');