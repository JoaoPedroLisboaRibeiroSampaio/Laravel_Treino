<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index(){
        $nome = "João Pedro";
        return view('pagina',['nome' => $nome]);
    }
}
