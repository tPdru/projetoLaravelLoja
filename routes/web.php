<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('home');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('fale-conosco');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('sobre-nos');
