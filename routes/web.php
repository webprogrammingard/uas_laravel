<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SekolahController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', fn() => redirect('/sekolah'));
Route::resource('sekolah', SekolahController::class);
