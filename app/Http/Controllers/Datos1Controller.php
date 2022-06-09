<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asistente;
use App\Models\Curso;
use App\Models\Profesor;
use App\Models\Telefono;

class Datos1Controller extends Controller
{
    public function index(){
        $asistentes = Asistente::paginate();
        $cursos = Curso::paginate();
        $profesors = Profesor::paginate();
        $telefonos = Telefono::paginate();

        return view('welcome', compact('asistentes', 'cursos', 'profesors', 'telefonos'));
    }
}
