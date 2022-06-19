<?php

use App\Http\Controllers\ClienteController;
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
    return view('welcome');
});

// Route::prefix('clientes')->group(function () {
//     Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');
//     Route::get('/create', [ClienteController::class, 'create'])->name('clientes.create');    
//     Route::get('/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
   
//     Route::post('/', [ClienteController::class, 'store'])->name('cliente.store');
//     Route::put('/{id}', [ClienteController::class, 'update'])->name('cliente.update');
//     Route::delete('/{id}', [ClienteController::class, 'destroy'])->name('cliente.destroy');
    
// });