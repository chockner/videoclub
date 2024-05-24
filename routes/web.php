<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    //return 'Pantalla principal';
});

Route::get('login', function () {
    return view('auth.login');
    //return 'Login usuario';
});

Route::get('logout', function () {
    return view('');
    //return 'Logout usuario';
});

Route::get('catalog', function () {
    return view('catalog.index');
    //return 'Listado Películas';
});

Route::get('catalog/show/{id}', function ($id) {
    return view('catalog.show', ['id' => $id]);
    //return 'Vista detalle película ' . $id;
});

Route::get('catalog/create', function () {
    return view('catalog.create');
    //return 'Añadir película';
});

Route::get('catalog/edit/{id}', function ($id) {
    return view('catalog.edit', ['id' => $id]);

    //return 'Modificar película ' . $id;
});