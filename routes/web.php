<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

Route::get('/' ,[PostController::class,'index']);

Route::post('/store' ,[PostController::class,'store']);

Route::get('/show/{id}' ,[PostController::class,'show']);

Route::get('/create' ,[PostController::class,'create']);

Route::get('/edit/{id}' ,[PostController::class,'edit']);

Route::put('/update/{id}' ,[PostController::class,'update']);

Route::delete('/delete/{id}' ,[PostController::class,'destroy']);


