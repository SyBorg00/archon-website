<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\HomeController;

//for every load, the products will be loaded on the home page


Route::get('/', [HomeController::class, 'index']);

//this is to send the quotations to the database 
Route::post('/quote', [QuoteController::class, 'store'])
    ->name('quote.store');
