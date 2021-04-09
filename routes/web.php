<?php

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
use App\Http\Controllers\EmpleadosController;

Route::get('/', [EmpleadosController::class, 'index'])->name('empleados.index');
Route::post('empleados', [EmpleadosController::class, 'store'])->name('empleados.store');
Route::delete('empleados/{empleados}', [EmpleadosController::class,'destroy'])->name('empleados.destroy');




