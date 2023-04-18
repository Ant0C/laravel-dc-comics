<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\PageController;
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

Route::get('/', function () {return view('welcome');});

Route::get('/comics',[PageController::class,'index'])->name('comics.index');

Route::get('/comics/create',[PageController::class,'create'])->name('comics.create');

Route::get('/comics/{id}',[PageController::class,'show'])->name('comics.show');

Route::post('/comics', [PageController::class, 'store'])->name('comics.store');

Route::get('/comics/{id}/edit',[PageController::class, 'edit'])->name('comics.edit');

Route::put('/comics/{id}',[PageController::class, 'update'])->name('comics.update');

Route::delete('/comics/{id}',[PageController::class, 'destroy'])->name('comics.destroy');