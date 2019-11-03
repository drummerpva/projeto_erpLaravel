<?php
Route::get('/', function () {
    return view('dashboard.home');
});
$this->resource("categorias", "CategoriaController");