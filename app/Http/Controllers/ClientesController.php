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
    public function edit($id)
    {
        $client = Clientes::find($id);
        return view('cliente.EditarCliente', compact('client'));
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
    public function update(Clientes $clientes, ClienteStoreRequest $clienteStoreRequest)
    {
        $updateclient = $clienteStoreRequest->validated();
        $clientes->fill($updateclient);
        $clientes->saveOrFail();
        return Redirect::route('clientlist');
    }
    public function destroy($id, Clientes $clientes) 
    {
        $client = $clientes->find($id);

        $client->delete();

        return Redirect::route('clientlist');
    }
    public function apiclientesview(Clientes $clientes)
    {
        set_time_limit(300);
        $newClient = [];
        $json_data = json_decode(file_get_contents('cliente.json'));
        foreach ($json_data->cliente as $cliente) {
            
            $newClient[] = ['id' => $cliente->contato->id,'codigo' => $cliente->contato->codigo,
            'nome' => $cliente->contato->nome,'fantasia' => $cliente->contato->fantasia,'tipo_pessoa' => $cliente->contato->tipo_pessoa,
            'cpf_cnpj' => $cliente->contato->cpf_cnpj,'endereco' => $cliente->contato->endereco,'numero' => $cliente->contato->numero,
            'complemento' => $cliente->contato->complemento,'bairro' => $cliente->contato->bairro,'bairro' => $cliente->contato->bairro,
            'cidade' => $cliente->contato->cidade,'uf' => $cliente->contato->uf];
             
        }
           for($i = 0; $i< count($newClient); $i++) {
            Clientes::create($newClient[$i]);
           }
           set_time_limit(60);
           
            return Redirect::route('clientlist');
    }
}
