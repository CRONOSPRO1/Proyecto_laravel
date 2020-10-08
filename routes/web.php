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

/*Route::get('/', function () {
    return view('welcome');
});*/

use  App\Articulo;
use PhpParser\Builder\Function_;

Route::get("/", "Micontrolador@index");
Route::get("/index", "Micontrolador@index");
Route::get("/crear", "Micontrolador@create");
Route::get("/articulos", "Micontrolador@store");
Route::get("/mostrar", "Micontrolador@show");
Route::get("/contactar", "Micontrolador@contactar");
Route::get("/tablas", "Micontrolador@tablas");

Route::get("/insertar",function(){

    DB::insert("INSERT INTO articulos (nombre,seccion) VALUES (?,?)",
    ["Casa" ,"Ceramica"]);

});

/*Route::get("/leer",function(){
    
    $resultado=DB::select("SELECT * FROM articulos WHERE id = ?", [1]);

    foreach ($resultado as $lol) {
        
       return $lol->nombre;
    }

});*/
Route::get("/lol", function () {

    /*$articulos=Articulo::all();

    foreach ($articulos as $articulo) {
        echo $articulo->nombre.'<br>';
    }*/
    $articulos = Articulo::where("seccion", "Auto")->get();
   foreach ($articulos as $articulo) {
       echo var_dump($articulo->nombre);
   }
});
