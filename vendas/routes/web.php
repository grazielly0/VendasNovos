<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('paginas.index');
});


Route::get('/Cadastrar', function () {
    return view('paginas.Cadastrar');
});





Route::get('/editar', function () {
    return view('paginas/editar');
});


route::get('/cadastrar/salvar',[App\Http\Controllers\ControllerVendas::class,'store']);
 
route::get('/consultar',[App\Http\Controllers\ControllerVendas::class,'consultar']);
 
route::get('/editar/{id}',[App\Http\Controllers\ControllerVendas::class,'editar']);
 
route::get('/atualizar/{id}',[App\Http\Controllers\ControllerVendas::class,'atualizar']);
 
route::get('/excluir/{id}',[App\Http\Controllers\ControllerVendas::class,'excluir']);
 
 