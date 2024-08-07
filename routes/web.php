<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/projects/all','index');
    Route::get('/projects/{slug}','by_category');
});
