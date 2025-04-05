<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('tabellone');
// });

Route::get("/", [PageController::class, "tabellone"]);