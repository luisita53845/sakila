<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
});

Route::get("categorias" , "CategoriaController@index");

Route::get("categorias/create", "CategoriaController@create" ); 

Route::post("categorias/store", "CategoriaController@store" ); 

Route::get("categorias/edit/{idnombre}", "CategoriaController@edit");

Route::post("categorias/update", "CategoriaController@update");