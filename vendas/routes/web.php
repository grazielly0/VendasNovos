<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas.index');
});


Route::get('/Cadastrar', function () {
    return view('paginas.Cadastrar');
});


Route::get('/Consultar', function () {
    return view('paginas.Consultar');
});


Route::get('/editar', function () {
    return view('paginas/editar');
});


Route::get('/cadastrar/salvar',[App\Http\Controllers\registrarAtividadeController::class, 'store']);