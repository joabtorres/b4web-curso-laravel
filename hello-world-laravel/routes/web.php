<?php
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SiteController::class, 'index']);
Route::get('/sair', [SiteController::class, 'sair']);
Route::get('/usuarios/{qnt}', [SiteController::class, 'users']);
Route::get('/exercicio1', [SiteController::class, 'atividade1']);
Route::get('/exercicio2', [SiteController::class, 'atividade2']);
Route::get('/comentarios', [SiteController::class, 'comentarios']);