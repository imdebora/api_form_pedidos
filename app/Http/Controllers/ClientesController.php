<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteStoreRequest;
use App\Models\Clientes;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientesController extends Controller
{
    public function list()
    {
        $clients = Clientes::all();

        return view('cliente.ListaCliente', compact('clients'));
    }
    public function edit()
    {
        $clients = Clientes::all();
        return view('cliente.EditarCliente', compact('clients'));
    }
    public function new()
    {
        return view('cliente.NovoCliente');
    }

    public function store(ClienteStoreRequest $clienteStoreRequest)
    {
        $newclient = $clienteStoreRequest->validated();
        Clientes::create($newclient);
        return Redirect::route('clientlist');

    }
}
