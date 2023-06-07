<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', );
Route::resource('/', HomeController::class);
Route::resource('/student', StudentController::class);
Route::get('/cari', [HomeController::class, 'cari']);

// Route::get('/', function () {
//     return view('welcome');
// });
