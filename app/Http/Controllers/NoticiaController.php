<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Factories\NoticiaFactory;
use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index() {
        /* $noticias = NoticiaFactory::generarNoticias(30);
        return view('backend.noticias.index', compact('noticias')); */
        $noticias = NoticiaFactory::hacerNoticia(22);
        $noticias = Noticia::whereIn('id', range(3, 22))->orderByDesc('id')->get();
        return view('backend.noticias.show-section-noticias', compact('noticias'));
    }

    public function show($id) {
        $noticia = (object) array(
            "titulo" => "What is Lorem Ipsum?",
            "cuerpo" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam fuga, neque eveniet sit eius incidunt debitis veritatis aliquid distinctio tenetur hic nostrum est voluptatem sint ex quaerat soluta quas quod?",
            "imagen" => "https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png",
            "id" => $id
        );
        return view('backend.noticias.show', compact('noticia'));
    }

    /* public function showBlog() {
        //$noticias = Noticia::all();
        //dd($noticias);

        $noticias = NoticiaFactory::hacerNoticia(22);
        $noticias = Noticia::whereIn('id', range(3, 22))->orderByDesc('id')->get();
        return view('backend.noticias.show-section-noticias', compact('noticias'));
    } */
}
