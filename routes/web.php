<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;


//list all persons route
Route::get('/',([PersonController::class,'index']))
        ->name('mainhome');

//all fields person route
Route::resource('persons',PersonController::class);
