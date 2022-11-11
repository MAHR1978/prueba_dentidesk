<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaDentideskControllers;

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

/*Route::get('/', function () {
    return view('welcome');
	//return "prueba dentidesk";
	
});*/

Route::get('/', [PruebaDentideskControllers::class, 'index']);
//Route::get('logindentidesk', [PruebaDentideskControllers::class, 'inicio'])->name('logindentidesk.inicio');
Route::post('logindentidesk', [PruebaDentideskControllers::class, 'verifica_user'])->name('logindentidesk.verifica_user');
Route::get('ventas', [PruebaDentideskControllers::class, 'venta'])->name('ventas');

Route::get('costos', [PruebaDentideskControllers::class, 'costo'])->name('costos');

Route::post('ventas', [PruebaDentideskControllers::class, 'ingresa_venta'])->name('ingreso_venta');
Route::get('inicio', [PruebaDentideskControllers::class, 'inicio'])->name('inicio');
Route::get('ver_ventas', [PruebaDentideskControllers::class, 'ver_ventas'])->name('ver_ventas');
Route::post('costos', [PruebaDentideskControllers::class, 'ingresa_costo'])->name('ingreso_costo');
Route::get('ver_costos', [PruebaDentideskControllers::class, 'ver_costos'])->name('ver_costos');
Route::post('por_mes', [PruebaDentideskControllers::class, 'ventas_por_mes'])->name('ventas_por_mes');
Route::post('costos_por_mes', [PruebaDentideskControllers::class, 'costos_por_mes'])->name('costos_por_mes');