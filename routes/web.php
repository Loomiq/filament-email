<?php

use Illuminate\Support\Facades\Route;
use Loomiq\FilamentEmail\Http\Controllers\PostmarkController;

Route::get('/drivers/postmark', [PostmarkController::class, 'handle'])->name('postmark.handle');
