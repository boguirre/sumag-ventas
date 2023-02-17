<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\DuaController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\IngresoController;
use App\Http\Controllers\MedidaController;
use App\Http\Controllers\PagoProveedorController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\PrestamoDetalleController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\UserController;
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

Route::get('/', [WebController::class, 'index'])->name('web.index');
Route::get('ver_articulo/{articulo}', [WebController::class, 'ver_articulo'])->name('web.ver_articulo');
Route::get('escoger_producto/{categoria}', [WebController::class, 'escoger_producto'])->name('web.escoger_producto');
Route::get('/articulos', [WebController::class, 'escoger_producto2'])->name('web.escoger_producto2');
Route::get('/sobre-nosotros', [WebController::class, 'sobre_nosotros'])->name('web.sobre_nosotros');
Route::get('/contacto', [WebController::class, 'contacto'])->name('web.contacto');



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

Route::resource('usuario', UserController::class)->middleware('can:Modulo Usuarios')->names('usuario');
Route::get('/usuario/{usuario}/editarol',[UserController::class, 'editrol'])->name('usuario.roles');
Route::put('usuario/{usuario}/updaterol', [UserController::class, 'updaterol'])->name('usuario.updaterole');
Route::resource('admin', AdminController::class)->middleware('can:Modulo Dashboard')->names('admin');

Route::resource('categoria', CategoriaController::class)->middleware('can:Modulo Categorias')->names('categoria');
Route::post('categoria/{categorium}/activar', [CategoriaController::class, 'activar'])->middleware('can:Modulo Categorias')->name('categoria.activar');

Route::resource('medida', MedidaController::class)->middleware('can:Modulo Unidades Medida')->names('medida');

Route::resource('articulo', ArticuloController::class)->middleware('can:Modulo Articulos')->names('articulo');

Route::get('/venta/{ventum}/pdf', [VentaController::class, 'pdf'])->middleware('can:Modulo Ventas')->name('venta.pdf');
Route::get('/ventas/reporte', [VentaController::class, 'reporte'])->middleware('can:Modulo Ventas')->name('venta.reporte');
Route::get('/ventas/reporte/fechas/', [VentaController::class, 'reportesxfiltros'])->middleware('can:Modulo Ventas');
Route::post('/ventas/reporte/fechas/', [VentaController::class, 'reportesxfiltrosxfechas'])->middleware('can:Modulo Ventas')->middleware('auth')->name('venta.reportefechas');
Route::post('venta/exportfechas/', [VentaController::class, 'exportarexcelfechas'])->middleware('can:Modulo Ventas')->name('venta.exportfechas');
Route::post('/venta/pdf', [VentaController::class, 'exportarpdffechas'])->middleware('can:Modulo Ventas')->name('venta.pdffechas');
Route::post('venta/store', [VentaController::class, 'store'])->middleware('can:Modulo Ventas')->name('venta.store');
Route::resource('venta', VentaController::class)->middleware('can:Modulo Ventas')->names('venta');
Route::post('venta', [VentaController::class, 'indexventas'])->middleware('can:Modulo Ventas')->name('venta.indexventas');

Route::get('cambio_estado/venta/{ventum}', [VentaController::class, 'cambio_estado'])->middleware('can:Modulo Ventas')->name('cambio.estado.venta');

Route::resource('ingreso', IngresoController::class)->middleware('can:Modulo Ingresos')->names('ingreso');

Route::get('/prestamo/reporte', [PrestamoController::class, 'reporte'])->middleware('can:Modulo Prestamos')->name('prestamos.reporte');
Route::post('prestamo/exportpdf', [PrestamoController::class, 'exportarpdffechas'])->middleware('can:Modulo Prestamos')->name('prestamo.pdf');
Route::post('prestamo/exportexcel', [PrestamoController::class, 'exportarexcelfechas'])->middleware('can:Modulo Prestamos')->name('prestamo.excel');
Route::post('prestamo/filtro', [PrestamoController::class, 'filtro'])->middleware('can:Modulo Prestamos')->name('prestamo.filtro');
Route::post('prestamo/download', [PrestamoController::class, 'download'])->middleware('can:Modulo Prestamos')->name('prestamo.download');
Route::resource('prestamo', PrestamoController::class)->middleware('can:Modulo Prestamos')->names('prestamo');
Route::post('prestamo/{prestamo}/addpago', [PrestamoController::class, 'addpago'])->middleware('can:Modulo Prestamos')->name('prestamo.addpago');

Route::resource('empresa', EmpresaController::class)->middleware('can:Modulo Empresas')->names('empresa');

Route::post('sucursal/{sucursal}/activar', [SucursalController::class, 'activar'])->middleware('can:Modulo Tiendas')->name('sucursal.activar');
Route::resource('sucursal', SucursalController::class)->middleware('can:Modulo Tiendas')->names('sucursal');


Route::resource('proveedor', ProveedorController::class)->middleware('can:Modulo Proveedores')->names('proveedor');

Route::get('/pago-proveedor/{pagoProveedor}/pdf', [PagoProveedorController::class, 'exportpdf'])->middleware('can:Modulo Pagos Proveedores')->name('pago-proveedor.exportpdf');
Route::get('/pago-proveedor/reporte', [PagoProveedorController::class, 'reporte'])->middleware('can:Modulo Pagos Proveedores')->name('pago-proveedor.reporte');
Route::post('pago-proveedor/exportpdf', [PagoProveedorController::class, 'exportarpdffechas'])->middleware('can:Modulo Pagos Proveedores')->name('pago-proveedor.pdf');
Route::post('pago-proveedor/exportfechas/', [PagoProveedorController::class, 'exportarexcelfechas'])->middleware('can:Modulo Pagos Proveedores')->name('pago-proveedor.exportfechas');
Route::resource('pago-proveedor', PagoProveedorController::class)->middleware('can:Modulo Pagos Proveedores')->names('pago-proveedor');
Route::post('pago-proveedor/{pagoProveedor}/addpago', [PagoProveedorController::class, 'addpago'])->middleware('can:Modulo Pagos Proveedores')->name('pago-proveedor.addpago');
Route::post('pago-proveedor/filtro', [PagoProveedorController::class, 'filtro'])->middleware('can:Modulo Pagos Proveedores')->name('pago-proveedor.filtro');

Route::post('dua/exportfechas/', [DuaController::class, 'exportarpdffechas'])->middleware('can:Modulo Duas')->name('dua.pdffechas');
Route::post('venta/excelfechas/', [DuaController::class, 'exportarexcelfechas'])->middleware('can:Modulo Duas')->name('dua.excelfechas');
Route::post('dua/filtro', [DuaController::class, 'filtro'])->middleware('can:Modulo Duas')->name('dua.filtro');
Route::post('dua/download', [DuaController::class, 'download'])->middleware('can:Modulo Duas')->name('dua.download');
Route::post('dua/{dua}/estado', [DuaController::class, 'estado'])->middleware('can:Modulo Duas')->name('dua.estado');
Route::get('/dua/reporte', [DuaController::class, 'reporte'])->middleware('can:Modulo Duas')->name('dua.reporte');
Route::resource('dua', DuaController::class)->middleware('can:Modulo Duas')->names('dua');

Route::post('comprobante/excelfechas/', [ComprobanteController::class, 'exportarexcelfechas'])->middleware('can:Modulo Comprobantes')->name('comprobante.excelfechas');
Route::get('/comprobantes/reporte', [ComprobanteController::class, 'reporte'])->middleware('can:Modulo Comprobantes')->name('comprobante.reporte');
Route::post('comprobante/exportpdf', [ComprobanteController::class, 'exportarpdffechas'])->middleware('can:Modulo Comprobantes')->name('comprobante.pdf');
Route::post('comprobante/download', [ComprobanteController::class, 'download'])->middleware('can:Modulo Comprobantes')->name('comprobante.download');
Route::post('comprobante/{comprobante}/estado', [ComprobanteController::class, 'estado'])->middleware('can:Modulo Comprobantes')->name('comprobante.estado');
Route::resource('comprobante', ComprobanteController::class)->middleware('can:Modulo Comprobantes')->names('comprobante');


Route::resource('prestamo-detalle', PrestamoDetalleController::class)->middleware('can:Modulo Prestamos')->names('prestamo-detalle');

Route::resource('roles', RoleController::class)->middleware('can:Modulo Usuarios')->names('role');
