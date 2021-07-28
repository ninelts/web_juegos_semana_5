<?php

use App\User;
use Illuminate\Support\Facades\Auth;
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
Route::middleware('guest')->group(function(){

    Route::get('/', function () {
        return view('welcome');
    })->name('guest.home');

    Route::get('/videos', function () {
        return view('guest.videos');
    })->name('guest.videos');

    Route::get('/imagenes', function () {
        return view('guest.imagenes');
    })->name('guest.images');


    Route::get('/juegos', function () {
        return view('guest.juegos');
    })->name('guest.games');
});


Route::middleware('auth')->group(function() {
    Route::get('/perfil', function () {
        $usuario = User::find(Auth::id());
        return view('auth.perfil', [ 'usuario' => $usuario ]);
    })->name('auth.perfil');

    Route::post('/comentarios' , 'GaleriaController@guardarComentario')->name('auth.guardar_comentario');

    Route::post('/actualizar_usuario' , 'HomeController@actualizarUsuario')->name('auth.actualizar_usuario');

});
Route::get('/salir', function () {
  Auth::logout();
  return view('welcome');
})->name('auth.salir');


Route::get('/galeria', 'GaleriaController@index')->name('auth.galeria');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
