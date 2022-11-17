<?php

namespace App\Http\Controllers;

use App\Http\Requests\PedidoStoreRequest;
use App\Models\Pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PedidosController extends Controller
{
    public function list()
    {
        $purchases = Pedidos::all();
        return view('pedido.ListaPedido', compact('purchases'));
    }
    public function new()
    {
        return view('pedido.NovoPedido');
    }
    public function store(PedidoStoreRequest $pedidoStoreRequest)
    {
        $newpurchase = $pedidoStoreRequest->validated();
        Pedidos::create($newpurchase);
        return Redirect::route('purchaselist');
    }
}
