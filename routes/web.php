<?php

use App\Http\Controllers\Api\OrderController;
use Illuminate\Support\Facades\Route;
Route::get('/order/{id}',[OrderController::class,'orders']);