<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\WebController;
use App\Http\Controllers\CartController;

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
Route::get('productos/{paginaActual}', [WebController::class, 'productos'])->name('productos');
Route::get('producto/{id}', [WebController::class, 'producto'])->name('producto');
Route::get('cart', [WebController::class, 'cart'])->name('cart');

Route::get('products/{id}/{paginaActual}', [WebController::class, 'productosCategoria'])->name('productos.categoria');


Route::post('/cart-add', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart-remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

Route::get('login', [WebController::class, 'login'])->name('login');
Route::post('auth', [WebController::class, 'auth'])->name('auth');
Route::get('logout', [WebController::class, 'logout'])->name('logout');
Route::post('add-unit', [CartController::class, 'addUnit'])->name('addUnit');
Route::post('subtract-unit', [CartController::class, 'subtractUnit'])->name('subtractUnit');

Route::get('checkout', [WebController::class, 'checkout'])->name('checkout');
