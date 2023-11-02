<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

Route::get('/principal', [PrincipalController::class, 'index'])->name('principal');
Route::get('/sobre-nos', [SobreNosController::class, 'index'])->name('sobre-nos');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');

Route::get('/', function () {
    return view('welcome');
});
