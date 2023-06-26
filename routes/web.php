<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',   [ProductController::class,'index']);

Route::get('list',   [ProductController::class,'create'])->name('list');
Route::get('getlist', [ProductController::class,'show'])->name('getlist');
//Route::get('getdetails', [ProductController::class,'create'])->name('getdetails');