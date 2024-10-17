<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::post('/post', [PostController::class, 'store'])->name('post.create');

Route::delete('/post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('/post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');

Route::put('/post/{post}', [PostController::class, 'update'])->name('post.update');

Route::

Route::get('/profile', [ProfileController::class, 'index']);
