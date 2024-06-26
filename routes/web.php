<?php

use App\Http\Controllers\Api\APIController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ResultController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/static', function () {
    return view('static');
});
Route::get('/home', function () {return view('home');});
Route::get('/results/{id}', [ResultController::class, 'show']);
Route::get('/form', [FormController::class, 'show']);

Route::get('/entreprises', [APIController::class, 'getEntreprisesInfoInJson']);
Route::get('/entreprise/{id}', [APIController::class, 'getEntreprisesStatsInJson']);
