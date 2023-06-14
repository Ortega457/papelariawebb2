<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PapelariaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/', [PapelariaController::class, 'index'])->name('papelaria.index');
Route::get('/sobre', [PapelariaController::class, 'sobre'])->name('papelaria.sobre');
Route::get('/contato', [PapelariaController::class, 'contato'])->name('papelaria.contato');
Route::get('/mensagens', [PapelariaController::class, 'mensagens'])->name('papelaria.mensagens');
Route::get('/avaliacoes', [PapelariaController::class, 'avaliacoes'])->name('papelaria.avaliacoes');
Route::post('/contato/store', [PapelariaController::class, 'store'])->name('papelaria.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/papelaria/login', [PapelariaController::class, 'login'])->name('papelaria.login');
//Clientes
Route::get('/clientes/index', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes/create', [ClienteController::class, 'store'])->name('clientes.store');
//Produtos
Route::get('/produtos', [ProdutoController::class, 'create'])->name('produtos.create');
Route::get('/produtos/index', [ProdutoController::class, 'index'])->name('produtos.index');
Route::post('/produtos/store', [ProdutoController::class, 'store'])->name('produtos.store');
Route::get('/produtos/{produto}/edit',  [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');
Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
//Categorias
Route::get('/categorias', [CategoriaController::class, 'create'])->name('categorias.create');
Route::post('/categorias/store', [CategoriaController::class, 'store'])->name('categorias.store');
Route::get('/categorias/index', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/{categoria}/edit',  [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
//Pedidos
Route::get('pedidos/create/{produto_id}', [PedidoController::class, 'create'])->name('pedidos.create');
Route::post('/pedidos', [PedidoController::class, 'store'])->name('pedidos.store');
Route::get('/pedidos/index', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/pedidos', [PedidoController::class, 'pedidos'])->name('pedidos.pedidos');
Route::get('/pedidos/{pedido}/edit',  [PedidoController::class, 'edit'])->name('pedidos.edit');
Route::put('/pedidos/{pedido}', [PedidoController::class, 'update'])->name('pedidos.update');
Route::delete('/pedidos/{pedido}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');

