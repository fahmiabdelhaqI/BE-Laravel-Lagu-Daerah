<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//get lagu daerah
Route::get('/lagudaerah', [App\Http\Controllers\Api\LaguController::class, 'index']);

//create
Route::post('/lagudaerah', [App\Http\Controllers\Api\LaguController::class, 'create']);

//update
Route::post('/lagudaerah/{id}', [App\Http\Controllers\Api\LaguController::class, 'update' ]);

//delete
Route::delete('/lagudaerah/{id}', [App\Http\Controllers\Api\LaguController::class,'delete' ]);
