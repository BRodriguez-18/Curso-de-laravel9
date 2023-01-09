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

Route::get('/', function(){
    return "Welcom";
});

Route::get('/cursos', function () {
    return [
        'Cursos' => [
            'Curso de Laravel 9',
            'Curso de programación orientada a objetos',
            'Curso de Git',
        ]
    ];
});

Route::get('/notas', function(){
    return view('notes');
});

Route::get('/notas/crear', function(){
    return view('add-note');
});

Route::get('notas/{id}/editar', function($id){
    return "Editar nota: " . $id;
});

Route::get('notas/{id}/detalle', function($id){
    return "Este es el detalle de la nota " . $id;
});