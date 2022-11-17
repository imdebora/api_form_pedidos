<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoStoreRequest;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
    public function store(ProdutoStoreRequest $produtoStoreRequest)
    {
        $newproduct = $produtoStoreRequest->validated();
        Produtos::create($newproduct);
        return Redirect::route('productlist');
    }
}
