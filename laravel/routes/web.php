<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('site.home');
Route::get('home',[HomeController::class,'index'])->name('site.home');
Route::get('sobre',[HomeController::class,'sobre'])->name('site.sobre');
Route::get('servicos',[HomeController::class,'servicos'])->name('site.servicos');
Route::get('contato',[HomeController::class,'contato'])->name('site.contato');
Route::get('reserva',[HomeController::class,'reserva'])->name('site.reserva');
