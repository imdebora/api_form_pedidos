<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [AdminController::class, 'index'])->name('adminindex');

Route::get('/cliente', [ClientesController::class, 'index'])->name('clienteindex');

// Rotas para clientes

Route::get('/listaclientes', [ClientesController::class, 'list'])->name('clientlist');
Route::get('/novocliente', [ClientesController::class, 'new'])->name('newclient');
Route::post('/novocliente', [ClientesController::class, 'store'])->name('clientstore');
Route::get('/editarcliente/{client}', [ClientesController::class, 'edit'])->name('editclient');
Route::put('/editarcliente/{client}', [ClientesController::class, 'update'])->name('updateclient');
Route::delete('/listaclientes/apagar/{client}', [ClientesController::class, 'destroy'])->name('destroyclient');
Route::post('/carregarclientes', [ClientesController::class, 'apiclientesview'])->name('apiclientesview');

// Rotas para produtos

Route::get('/listaprodutos', [ProdutosController::class, 'list'])->name('productlist');
Route::get('/novoproduto', [ProdutosController::class, 'new'])->name('newproduct');
Route::post('/novoproduto', [ProdutosController::class, 'store'])->name('productstore');
Route::get('/editarproduto/{produto}', [ProdutosController::class, 'edit'])->name('editproduct');
Route::put('/editarproduto/{produto}', [ProdutosController::class, 'update'])->name('updateproduct');
Route::delete('/listaprodutos/apagar/{produto}', [ProdutosController::class, 'destroy'])->name('destroyproduct');
Route::post('/carregarprodutos', [ProdutosController::class, 'apiprodutosview'])->name('apiprodutosview');


// Rotas para pedidos

Route::get('/listapedidos', [PedidosController::class, 'list'])->name('purchaselist');
Route::get('/novopedido', [PedidosController::class, 'new'])->name('newpurchase');
Route::post('/novopedido', [PedidosController::class, 'store'])->name('purchasestore');

// Route::get('/', function () {
//     return view('welcome');
// });
