<?php

namespace App\Http\Controllers;

use App\Models\Pedidos;
use Illuminate\Http\Request;

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
}
