<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.sobre-nos');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.contato');

Route::prefix("/api")->group(function(){
    Route::get('/produtos', function(){return 'Produtos';});
    Route::get('/fornecedores', function(){return 'Fornecedores';});
    Route::get('/clientes', function(){return 'Clientes';});
});

Route::get('/login', function(){return 'Login';});



Route::fallback(function (){
    echo 'A rota acessada não existe. <a href="'.route('site.principal').'">Clique aqui</a> para ir para página inicial';
});
