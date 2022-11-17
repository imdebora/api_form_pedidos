<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function list()
    {
        $products = Produtos::all();

        return view('produto.ListaProduto', compact('products'));
    }
    public function edit()
    {
        return view('produto.EditarProduto');
    }
    public function new()
    {
        return view('produto.NovoProduto');
    }
}
