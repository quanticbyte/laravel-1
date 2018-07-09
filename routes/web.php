<?php

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

// resource recibe nos parámetros(URI del recurso, Controlador que gestionará las peticiones)
Route::resource('fabricantes','FabricanteController',['except'=>['edit','create'] ]);
// Como la clase principal es fabricantes y un avión no se puede crear si no le indicamos el fabricante, 
// entonces necesitaremos crear lo que se conoce como  "Recurso Anidado" de fabricantes con aviones.
// Definición del recurso anidado:
Route::resource('fabricantes.aviones','FabricanteAvionController',[ 'except'=>['show','edit','create'] ]);

// Si queremos dar  la funcionalidad de ver todos los aviones tendremos que crear una ruta específica.
// Pero de aviones solamente necesitamos solamente los métodos index y show.
// Lo correcto sería hacerlo así:
Route::resource('aviones','AvionController',[ 'only'=>['index','show'] ]);

/*
Route::get('/', function () {
    return view('welcome');
});
*/