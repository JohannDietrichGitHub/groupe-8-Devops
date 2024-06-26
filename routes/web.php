<?php

use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/static', function () {
    return view('static');
});
Route::get('/results/{id}', [ResultController::class, 'show']);
Route::get('/form', [FormController::class, 'show']);
