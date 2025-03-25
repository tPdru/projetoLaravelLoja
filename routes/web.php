<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.sobre-nos');

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.contato');
