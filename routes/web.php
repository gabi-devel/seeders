<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\SaludarController;

Route::get('/hola-persona/{nombre?}', function($parametro = 'humano') {
    return view('backend.saludo.hola-persona', ['nombre' => $parametro]);
});

Route::get('/hola-bienvenido/{nombre?}', function($variable = 'humano') {
    return view('backend.saludo.hola-bienvenido', ['nombre' => $variable]);
});

Route::get('/bienvenido/{nombre?}', function($nombre = 'humano') {
    return view('backend.saludo.bienvenido', ['nombre' => $nombre]);
})->name('bienvenidoName');

Route::get('/hola-controller-view/{nombre?}', function($nombre = 'humano') {
    return view('backend.saludo.hola-controller-view', ['nombre' => $nombre]);
});

/* Podría ir ese, pero como tiene dos métodos nomás, podemos usar las dos líneas de abajo */
// Route::resouce('/noticias', NoticiaController::class);
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');

Route::get('/hola-controller/{nombre?}', [SaludarController::class, 'saludar'])->name('hola-controller.saludar');

//Route::get('blog', 'NoticiaController@showBlog')->name('blog');
//Route::get('/blog', [NoticiaController::class, 'showBlog'])->name('noticias.blog');
Route::resource('/blog', NoticiaController::class);