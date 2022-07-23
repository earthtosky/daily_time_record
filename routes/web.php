<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get('/dtr', function () {
    return view('dtr');
})->middleware(['auth'])->name('dtr');

Route::get('/c1form', function () {
    return view('form');
})->middleware(['auth'])->name('c1form');

Route::get('/', [UserController::class, 'index']);
