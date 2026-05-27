<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index() {
        return "Listar alunos";
    }

    public function create() {
        return "Formulário de aluno";
    }

    public function store(Request $request) {
        return "Salvar aluno (simulado)";
    }

    public function show($id) {
        return "Exibir aluno por ID: " . $id;
    }
}