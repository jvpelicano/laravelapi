<?php

use App\Http\Controllers\Api\StudentController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/add-student', [StudentController::class, 'store']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


