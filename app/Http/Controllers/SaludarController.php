<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludarController extends Controller
{
    public function saludar($nombre)
    {
        return view('backend.saludo.hola-controller', ['nombre' => $nombre]);
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
