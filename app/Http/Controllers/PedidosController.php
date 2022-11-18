<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoStoreRequest;
use App\Http\Requests\PedidosxProdutosStoreRequest;
use App\Models\Pedidos;
use App\Models\PedidosxProdutos;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PedidosController extends Controller
{
    public function list()
    {
        $purchases = Pedidos::all();
        return view('pedido.ListaPedido', compact('purchases'));
    }
    public function new(Produtos $produtos)
    {
        $products = $produtos->all();
        return view('pedido.NovoPedido', compact('products'));
    }
    public function store(PedidoStoreRequest $pedidoStoreRequest, PedidosxProdutos $pedidosxProdutos, PedidosxProdutosStoreRequest $pedidosxProdutosStoreRequest)
    {

        $newpurchase = $pedidoStoreRequest->validated();
        $newPedidosxProdutos = $pedidosxProdutosStoreRequest->validated();

        //Procuro o produto selecionado e calculo o total
        $productSelected = Produtos::find($newPedidosxProdutos['produto_id']);
        $total = $productSelected['preco'] * $newPedidosxProdutos['quantidade'];
        $newpurchase['valor_total'] = $total;

        //Pego o id do pedido criado e insiro na tabela pedidosxprodutos
        $idLastId = Pedidos::create($newpurchase);

        $newPedidosxProdutos['pedido_id'] = $idLastId['id'];

        //Crio a tabela de pedidosxprodutos
        PedidosxProdutos::create($newPedidosxProdutos);
        return Redirect::route('purchaselist');
    }

}
