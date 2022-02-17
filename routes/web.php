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

//Route::get('/', function () {
//    return view('tabela');
//});
Route::get('/', [App\Http\Controllers\usuarioController::class, 'index'])->name('usuarios');

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/editar', [App\Http\Controllers\editController::class, 'index'])->name('usuarios')->middleware('auth');

Route::get('/cadastro', [App\Http\Controllers\usuarioController::class, 'create'])->middleware('auth');

Route::get('/editar/{id}', [App\Http\Controllers\usuarioController::class, 'edit']);

Route::post('/', [App\Http\Controllers\usuarioController::class, 'store']);

Route::put('/usuario/update/{id}', [App\Http\Controllers\usuarioController::class, 'update']);

Route::delete('/deletar/{id}', [App\Http\Controllers\usuarioController::class, 'destroy']);

Route::get('/buscar', [App\Http\Controllers\usuarioController::class, 'busca']);

Route::middleware(['auth:sanctum', 'verified', ])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

