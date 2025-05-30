<?php

use App\Http\Controllers\SzavakController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/szavak',[SzavakController::class,'index']);
Route::get('/szavak/tema',[SzavakController::class,'szavakTemaval']);
Route::get('/tema',[SzavakController::class,'index']);
