<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

Route::get('/', function () {
    return view('home');
});

//this is to send the quotations to the database 
Route::post('/quote', [QuoteController::class, 'store'])
    ->name('quote.store');
