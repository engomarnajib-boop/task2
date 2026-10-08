<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('home/{name}',[HomeController::class ,'home']);
Route::get('user',[UserController::class,'viewUser']);
