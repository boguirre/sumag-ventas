<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\VentaController;
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
    return redirect()->route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::resource('admin',AdminController::class)->middleware('auth')->names('admin');
Route::resource('categoria', CategoriaController::class)->middleware('auth')->names('categoria');
Route::post('categoria/{categorium}/activar', [CategoriaController::class, 'activar'])->middleware('auth')->name('categoria.activar');
Route::resource('medida', MedidaController::class)->middleware('auth')->names('medida');
Route::resource('articulo', ArticuloController::class)->middleware('auth')->names('articulo');
Route::resource('venta', VentaController::class)->middleware('auth')->names('venta');
Route::resource('ingreso', IngresoController::class)->middleware('auth')->names('ingreso');
