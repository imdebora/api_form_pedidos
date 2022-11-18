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
    public function edit($id)
    {   
        $product = Produtos::find($id);
        return view('produto.EditarProduto', compact('product'));
    }
    public function new()
    {
        return view('produto.NovoProduto');
    }
    public function update(ProdutoStoreRequest $produtoStoreRequest, Produtos $products) 
    {
        $updateproduct = $produtoStoreRequest->validated();
        $products->fill($updateproduct);
        $products->saveOrFail();
        return Redirect::route('productlist');
    }
    public function destroy(int $id, Produtos $products) 
    {
        $product = $products->find($id);

        $product->delete();

        return Redirect::route('productlist');
    }

    public function store(ProdutoStoreRequest $produtoStoreRequest)
    {
        $newproduct = $produtoStoreRequest->validated();
        Produtos::create($newproduct);
        return Redirect::route('productlist');
    }

    public function apiprodutosview(Produtos $produtos)
    {
        set_time_limit(300);
        $newProduct = [];
        $json_data = json_decode(file_get_contents('produto.json'));
        foreach ($json_data->produtos as $produtos) {
            $newProduct[] = ['id' => $produtos->produto->id,'nome' => $produtos->produto->nome,
            'codigo' => $produtos->produto->codigo,'preco' => $produtos->produto->preco,'preco_promocional' => $produtos->produto->preco_promocional,
            'unidade' => $produtos->produto->unidade,'gtin' => $produtos->produto->gtin,'tipoVariacao' => $produtos->produto->tipoVariacao,
            'localizacao' => $produtos->produto->localizacao,'preco_custo' => $produtos->produto->preco_custo,'preco_custo_medio' => $produtos->produto->preco_custo_medio,
            'situacao' => $produtos->produto->situacao];
             
        }
           for($i = 0; $i< count($newProduct); $i++) {
            Produtos::create($newProduct[$i]);
           }
           set_time_limit(60);
           
            return Redirect::route('productlist');
    }
}