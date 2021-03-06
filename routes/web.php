<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AsistenciaController;
use App\Http\Controllers\facturacontroller;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UsuarioController;
use App\Http\Models\factura;
use App\Http\Models\Bodega;
use App\Http\Models\Asistencia;
use App\Http\Models\Inventory;
use App\Http\Models\Order;
use App\Http\Models\Usuario;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function(){
    return Inertia::render('Dashboard');
})->name('dashboard');




Route::resources([
  'facturas' => FacturaController::class,
  'bodegas' => BodegaController::class,
  'asistencias' => AsistenciaController::class,
  'pedidos' => OrderController::class,
  'Inventorys' => InventoryController::class,
  'Usuarios' => UsuarioController::class


]);







 

