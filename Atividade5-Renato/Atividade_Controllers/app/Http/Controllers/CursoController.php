<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index() {
        return "Lista de cursos";
    }

    public function create() {
        return view('cursos.create');
    }

    public function listagem() {
        $cursos = ['Análise de Sistemas', 'Engenharia Civil', 'Administração'];
        return view('cursos.listagem', compact('cursos'));
    }

    public function show($id) {
        return "Curso selecionado: ID " . $id;
    }

    public function store(Request $request) {
        return "Curso cadastrado: " . $request->nome;
    }
}