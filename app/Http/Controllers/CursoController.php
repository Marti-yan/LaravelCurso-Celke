<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    // Listar os cursos
    public function index()
    {
        // Carregar a view
        return view("cursos.index");
    }
}
