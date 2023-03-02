<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/convert', function () {
    return view('convert');
});

Route::post('convert', [PDFController::class,'index']);
Route::get('test', [PDFController::class,'test']);

// Route::post('pdf',[PDFController::class,'pdf']);
