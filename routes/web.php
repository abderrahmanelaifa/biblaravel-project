<?php

use Illuminate\Support\Facades\Route;

Route::resource("authors", App\Http\Controllers\AuteurController::class);

Route ::resource("publishers", App\Http\Controllers\EditionController::class);

Route::resource("books", App\Http\Controllers\LivreController::class);

Route::resource("clients", App\Http\Controllers\ClientController::class);

Route::resource("loans", App\Http\Controllers\EmpruntController::class);
