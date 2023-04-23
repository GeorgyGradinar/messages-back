<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactRequestController;


Route::get('users', function()
{
    return 'Users!';
});

Route::post('users', [ContactRequestController::class, 'insert']);