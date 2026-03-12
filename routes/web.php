<?php

use App\Http\Middleware\EnsureTokenIsValid;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mySecretToken', [App\Http\Controllers\MySecretTokenController::class, 'index'])->name('index')
->middleware(EnsureTokenIsValid::class);
