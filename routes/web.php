<?php

use App\Http\Controllers\UserTaskController;
use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource ('user_task', UserTaskController::class);