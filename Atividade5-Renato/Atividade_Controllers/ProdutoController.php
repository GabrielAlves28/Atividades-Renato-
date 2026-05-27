<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create() {
        return view('produtos.create');
    }

    public function store(Request $request) {
        return "Nome enviado após o POST: " . $request->nome;
    }
}