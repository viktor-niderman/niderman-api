<?php

use App\Http\Controllers\Api\TelegramController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/telegram-message', [TelegramController::class, 'sendMessage']);