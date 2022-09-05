<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function pagina($id=1)
    {
        return view('paginas.Personagem',['id'=> $id]);
    }
}
