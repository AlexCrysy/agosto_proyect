<?php

use Illuminate\Support\Facades\Route;

//      Route::get('/', function () {       // despues de get le puedo colocar cualquier nombre
//      return view('services');           //le pongo services y me muestra lo que hay en la vista de services en views
//      });

//      Route::get('/alex', function () {   // despues de get le puedo colocar cualquier nombre con o sin eslas (/)
//      return view('welcome');            //le pongo services y me muestra lo que hay en la vista de services en views
//    });

       Route::get('alexander', function () {     //el nombre pirncipal o texto no importa (alex)
       return view('layouts.template');     //esta es para la vista de la pagina se coloca layouts-es la carpeta principal en vistas y
 });                                     //se coloca la otra carpeta que esta dentro (template) eje:  layouts.template 
                                           //el punto(.)se usa para ingresar a la carpeta que esta dentro de la carpeta principal

      Route::get('acerca-alex', function () {
      return view('about');
 });
      Route::get('index-alex ', function () {
      return view('index');
 });
      Route::get('servicios-alex', function () {
      return view('services');



});
Route::get('/', function () {
return view('layouts.template');
});
Route::get('inicio', function () {
return view('index1');
});
Route::get('acerca', function () {
return view('about2');
});
Route::get('contacto', function () {
return view('contactanos3');
 

});


// HTTP   es para 
// GET    es para obtener una pagina o algo que estoy buscando en internet
// POST   es para enviar informacion eje;cuando inicio sesion en la pagina envia la informacion
// PUT    es para actualizar los datos o registros
// delete es para borrar