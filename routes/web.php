<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {// despues de get le puedo colocar cualquier nombre
    return view('services');//le pongo services y me muestra lo que hay en la vista de services en views
});
    Route::get('/alex', function () {// despues de get le puedo colocar cualquier nombre con o sin eslas (/)
        return view('welcome');//le pongo services y me muestra lo que hay en la vista de services en views
});
Route::get('acerca-alex', function () {
    return view('about');
});
Route::get('index-alex ', function () {
    return view('index');
});
Route::get('servicios-alex', function () {
    return view('services');
});

// HTTP   es para 
// GET    es para obtener una pagina o algo que estoy buscando en internet
// POST   es para enviar informacion eje;cuando inicio sesion en la pagina envia la informacion
// PUT    es para actualizar los datos o registros
// delete es para borrar