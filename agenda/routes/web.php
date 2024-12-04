<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas/index');
});

Route::get('/index', function(){
    return view('paginas/index');
});

Route::get('/cadastrar', function(){
    return view('paginas/cadastrar');
});

Route::get('/cadastrar', [\App\http\Controllers\registrarAtividadeController::class,'index']);
Route::get('/cadastrar/salvar',[\App\http\Controllers\registrarAtividadeController::class,'store']);
Route::get('/consultar',[\App\Http\Controllers\registrarAtividadeController::class,'consultar']);
Route::get('/editar/{id}',[\App\Http\Controllers\registrarAtividadeController::class,'editar']);
Route::get('/atualizar/{id}',[\App\Http\Controllers\registrarAtividadeController::class,'atualizar']);
Route::get('/excluir/{id}',[\App\Http\Controllers\registrarAtividadeController::class,'excluir']);
