<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\PagoProveedorController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\VentaController;
use App\Models\PagoProveedor;
use App\Models\Venta;
use Illuminate\Support\Facades\Artisan;
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
Route::get('cmd/{command}', function ($command) {
    Artisan::call($command);
});
Route::resource('admin',AdminController::class)->middleware('auth')->names('admin');
Route::resource('categoria', CategoriaController::class)->middleware('auth')->names('categoria');
Route::post('categoria/{categorium}/activar', [CategoriaController::class, 'activar'])->middleware('auth')->name('categoria.activar');
Route::resource('medida', MedidaController::class)->middleware('auth')->names('medida');
Route::resource('articulo', ArticuloController::class)->middleware('auth')->names('articulo');
Route::get('/venta/{ventum}/pdf',[VentaController::class, 'pdf'])->name('venta.pdf');
Route::get('/ventas/reporte', [VentaController::class,'reporte'])->name('venta.reporte');
Route::post('venta/exportfechas/', [VentaController::class, 'exportarexcelfechas'])->name('venta.exportfechas');

Route::post('/venta/pdf',[VentaController::class, 'exportarpdffechas'])->name('venta.pdffechas');
Route::resource('venta', VentaController::class)->middleware('auth')->names('venta');

Route::get('cambio_estado/venta/{ventum}', [VentaController::class,'cambio_estado'])->name('cambio.estado.venta');
Route::resource('ingreso', IngresoController::class)->middleware('auth')->names('ingreso');
Route::get('/prestamo/reporte', [PrestamoController::class,'reporte'])->name('prestamos.reporte');
Route::resource('prestamo', PrestamoController::class)->middleware('auth')->names('prestamo');
Route::resource('empresa', EmpresaController::class)->middleware('auth')->names('empresa');
Route::post('sucursal/{sucursal}/activar', [SucursalController::class, 'activar'])->middleware('auth')->name('sucursal.activar');
Route::resource('sucursal', SucursalController::class)->middleware('auth')->names('sucursal');
Route::post('prestamo/{prestamo}/addpago', [PrestamoController::class, 'addpago'])->name('prestamo.addpago');
Route::resource('proveedor', ProveedorController::class)->middleware('auth')->names('proveedor');
Route::get('/pago-proveedor/{pagoProveedor}/pdf', [PagoProveedorController::class, 'exportpdf'])->name('pago-proveedor.exportpdf');
Route::get('/pago-proveedor/reporte', [PagoProveedorController::class,'reporte'])->name('pago-proveedor.reporte');
Route::resource('pago-proveedor', PagoProveedorController::class)->middleware('auth')->names('pago-proveedor');
Route::post('pago-proveedor/{pagoProveedor}/addpago', [PagoProveedorController::class, 'addpago'])->name('pago-proveedor.addpago');

