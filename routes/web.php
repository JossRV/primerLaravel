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

// ruta normal
// Route::get('/wenaas', function () {
//     return view('catalogo');
// });
// // creando rutas
// Route::get('/holamundo', function () {
//     return view('catalogo');
// });
// // enviando doble rutas
// Route::get('/loquesea', function () {
//     return view('welcome') . view('catalogo');
// });
// // rutas con parametros
// Route::get('/{valor1}', function ($valor) {
//     echo $valor;
//     return view('welcome') . view('catalogo');
// });
// pasar informacion a una vista
// Route::get('/{valor1}', function ($valor) {
//     return view('welcome', compact('valor')) . 
//             view('catalogo');
// });
// direccion para el inicio
Route::get('/', function () {
    return view('navegacion') . view('leyesDeLaFisica');
});
Route::get('/newton', function () {
    return view('navegacion') . view('leyNewton');
});
Route::get('/avogadro', function () {
    return view('navegacion') . view('leyAvogadro');
});
Route::get('/leyTermodinamica', function () {
    return view('navegacion') . view('leyTermodinamica');
});
Route::get('/gases', function () {
    return view('navegacion') . view('leyGases');
});