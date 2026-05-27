<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\ProdutoController;

// Exercícios 1 a 5 - CursoController
Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/novo', [CursoController::class, 'create']);
Route::get('/cursos/listagem', [CursoController::class, 'listagem']);
Route::post('/cursos', [CursoController::class, 'store']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);

// Exercício 6 - AlunoController (Resource)
Route::resource('alunos', AlunoController::class);

// Exercício 7 - DisciplinaController
Route::get('/disciplinas', [DisciplinaController::class, 'index']);
Route::get('/disciplinas/nova', [DisciplinaController::class, 'create']);
Route::get('/disciplinas/{id}', [DisciplinaController::class, 'show']);

// Atividade Final - ProdutoController
Route::get('/produtos/create', [ProdutoController::class, 'create']);
Route::post('/produtos', [ProdutoController::class, 'store']);