<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;

/* Podría ir ese, pero como tiene dos métodos nomás, podemos usar las dos líneas de abajo */
// Route::resouce('/noticias', NoticiaController::class);
Route::get('/noticias', [NoticiaController::class, 'index'])->name('noticias.index');
Route::get('/noticias/{noticia}', [NoticiaController::class, 'show'])->name('noticias.show');