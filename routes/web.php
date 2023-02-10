<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DuaController;
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

use App\Http\Controllers\WebController;

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

Route::get('/',[WebController::class,'index'])->name('web.index');
Route::get('ver_articulo/{articulo}',[WebController::class,'ver_articulo'])->name('web.ver_articulo');
Route::get('escoger_producto/{categoria}',[WebController::class,'escoger_producto'])->name('web.escoger_producto');
Route::get('/articulos',[WebController::class,'escoger_producto2'])->name('web.escoger_producto2');
Route::get('/sobre-nosotros',[WebController::class,'sobre_nosotros'])->name('web.sobre_nosotros');
Route::get('/contacto',[WebController::class,'contacto'])->name('web.contacto');



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
    dd(Artisan::output());
});

Route::resource('admin',AdminController::class)->middleware('auth')->names('admin');
Route::resource('categoria', CategoriaController::class)->middleware('auth')->names('categoria');
Route::post('categoria/{categorium}/activar', [CategoriaController::class, 'activar'])->middleware('auth')->name('categoria.activar');
Route::resource('medida', MedidaController::class)->middleware('auth')->names('medida');
Route::resource('articulo', ArticuloController::class)->middleware('auth')->names('articulo');
Route::get('/venta/{ventum}/pdf',[VentaController::class, 'pdf'])->name('venta.pdf');
Route::get('/ventas/reporte', [VentaController::class,'reporte'])->name('venta.reporte');
Route::get('/ventas/reporte/fechas/',[VentaController::class, 'reportesxfiltros'])->middleware('auth');
Route::post('/ventas/reporte/fechas/',[VentaController::class, 'reportesxfiltrosxfechas'])->middleware('auth')->name('venta.reportefechas');
Route::post('venta/exportfechas/', [VentaController::class, 'exportarexcelfechas'])->name('venta.exportfechas');
Route::post('/venta/pdf',[VentaController::class, 'exportarpdffechas'])->name('venta.pdffechas');
Route::post('venta/store',[VentaController::class, 'store'])->name('venta.store');
Route::resource('venta', VentaController::class)->middleware('auth')->names('venta');
Route::post('venta',[VentaController::class, 'indexventas'])->name('venta.indexventas');

Route::get('cambio_estado/venta/{ventum}', [VentaController::class,'cambio_estado'])->name('cambio.estado.venta');
Route::resource('ingreso', IngresoController::class)->middleware('auth')->names('ingreso');
Route::get('/prestamo/reporte', [PrestamoController::class,'reporte'])->name('prestamos.reporte');
Route::post('prestamo/exportpdf', [PrestamoController::class, 'exportarpdffechas'])->name('prestamo.pdf');
Route::post('prestamo/exportexcel', [PrestamoController::class, 'exportarexcelfechas'])->name('prestamo.excel');
Route::post('prestamo/filtro', [PrestamoController::class, 'filtro'])->name('prestamo.filtro');
Route::resource('prestamo', PrestamoController::class)->middleware('auth')->names('prestamo');
Route::resource('empresa', EmpresaController::class)->middleware('auth')->names('empresa');
Route::post('sucursal/{sucursal}/activar', [SucursalController::class, 'activar'])->middleware('auth')->name('sucursal.activar');
Route::resource('sucursal', SucursalController::class)->middleware('auth')->names('sucursal');
Route::post('prestamo/{prestamo}/addpago', [PrestamoController::class, 'addpago'])->name('prestamo.addpago');
Route::resource('proveedor', ProveedorController::class)->middleware('auth')->names('proveedor');
Route::get('/pago-proveedor/{pagoProveedor}/pdf', [PagoProveedorController::class, 'exportpdf'])->name('pago-proveedor.exportpdf');
Route::get('/pago-proveedor/reporte', [PagoProveedorController::class,'reporte'])->name('pago-proveedor.reporte');
Route::post('pago-proveedor/exportpdf', [PagoProveedorController::class, 'exportarpdffechas'])->name('pago-proveedor.pdf');

Route::post('pago-proveedor/exportfechas/', [PagoProveedorController::class, 'exportarexcelfechas'])->name('pago-proveedor.exportfechas');
Route::resource('pago-proveedor', PagoProveedorController::class)->middleware('auth')->names('pago-proveedor');
Route::post('pago-proveedor/{pagoProveedor}/addpago', [PagoProveedorController::class, 'addpago'])->name('pago-proveedor.addpago');
Route::post('pago-proveedor/filtro', [PagoProveedorController::class, 'filtro'])->name('pago-proveedor.filtro');
Route::post('dua/exportfechas/', [DuaController::class, 'exportarpdffechas'])->name('dua.pdffechas');
Route::post('venta/excelfechas/', [DuaController::class, 'exportarexcelfechas'])->name('dua.excelfechas');
Route::post('dua/filtro', [DuaController::class, 'filtro'])->name('dua.filtro');

Route::post('dua/download', [DuaController::class, 'download'])->name('dua.download');
Route::post('dua/{dua}/estado', [DuaController::class, 'estado'])->name('dua.estado');
Route::get('/dua/reporte', [DuaController::class,'reporte'])->name('dua.reporte');
Route::resource('dua', DuaController::class)->names('dua');

