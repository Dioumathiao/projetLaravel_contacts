<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::resource('contacts',ContactController::class);
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::get('/', function () {
    return view('welcome');
});


