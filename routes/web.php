<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
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
    return view('auth.login');
});

require __DIR__ . '/auth.php';

Route::get('/dtr', function () {
    return view('dtr');
})->middleware(['auth'])->name('dtr');

// <<<<<<< HEAD
// Route::get('/c1form', function () {
//     return view('form');
// })->middleware(['auth'])->name('c1form');

// Route::get('/', [UserController::class, 'index']);
// =======
// Route::get('/wkhtmltopdf',[FormController::class,'print_form'])->name('print_data');
// >>>>>>> 2c9ccb2fac975e4b69b7f1a988b32900c5eb9e20
