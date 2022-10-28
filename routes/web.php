<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control\barangController;

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


Route::get('/', [barangController::class,'getAll']);
Route::get('view/{id}', [barangController::class,'getView'])->name('view');
Route::get('list', [barangController::class,'getList'])->name('list');
Route::get('list/{jenis}', [barangController::class,'getSearch'])->name('search');
