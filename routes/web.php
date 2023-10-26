<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;

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

Route::get('/', [WebController::class, 'index'])->name('/');

Route::get('quienes-somos', [WebController::class, 'quienesSomo'])->name('quienes-somos');
Route::get('preguntas-frecuentes', [WebController::class, 'preguntasFrecuentes'])->name('preguntas-frecuentes');
Route::get('contactanos', [WebController::class, 'contactanos'])->name('contactanos');
Route::get('productos', [WebController::class, 'productos'])->name('productos');
