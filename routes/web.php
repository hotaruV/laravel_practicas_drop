<?php

use App\Http\Controllers\FormularioGeneralController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductoController;
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


Route::get('/', [PagesController::class, 'index'])->name('index');

Route::get('/curso-semestral', [PagesController::class, 'semestral'])->name('semestral');
Route::post('/curso-semestral', [PagesController::class, 'semestral_data'])->name('semestral_post');

Route::get('/curso-anual', [PagesController::class, 'anual'])->name('anual');
Route::get('/curso-semi-intensivo', [PagesController::class, 'semi'])->name('intensivo');

Route::get('/formulario', [FormularioGeneralController::class, 'index'])->name('form-index');

// Route::get('/productos-servicios', [ProductoController::class, 'saludo']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
