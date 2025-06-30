<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
// Route::get('/', function () {
//     return view('index');
// });






Route::get('/{slug?}', [PageController::class, 'show'])->where('slug', '.*');

