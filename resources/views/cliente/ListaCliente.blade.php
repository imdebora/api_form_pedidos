@extends('admin.subview.adminHeader')
@include('admin.subview.navbar')
@section('search')
    <div class="search-bar p-3 ">
        <form class="search-form d-flex align-items-center" method="GET" autocomplete="off">
            <input type="text" name="search" placeholder="Pesquisar Clientes" title="Procurar Clientes"><button type="submit"><i class="bi bi-search"></i></button>
        </form>
    </div>
@endsection
<section id="products">
    <div class="col-xs-4 col-sm-6">
        <div class="card">
            <div class="card-body">
                @if(!empty($message))
                    <div class="text-white alert alert-success bg-success text-center"></div>
                @endif
                <h5 class="card-title text-center">Lista de Clientes</h5>
                <table class="table table-striped table-hover table-scrollable">
                    <thead>
                    <tr>
                        {{-- <th scope="col">Código</th> --}}
                        <th scope="col">Nome</th>
                        <th scope="col">Fantasia</th>
                        <th scope="col">Tipo pessoa</th>
                        <th scope="col">CPF/CNPJ</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">CEP</th>
                        {{-- <th scope="col">Número</th>
                        <th scope="col">Complemento</th> --}}
                        {{-- <th scope="col">Bairro</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">UF</th> --}}
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($clients as $client)
                        <tr>

                            {{-- <td>{{$client->codigo}}</td> --}}

                            <td>{{$client->nome}}</td>

                            <td>{{$client->fantasia}}</td>

                            <td>{{$client->tipo_pessoa}}</td>

                            <td>{{$client->cpf_cnpj}}</td>

                            <td>{{$client->endereco}}</td>
                            
                            <td>{{$client->cep}}</td>

                            {{-- <td>{{$client->numero}}</td>

                            <td>{{$client->complememto}}</td> --}}

                            {{-- <td>{{$client->bairro}}</td>

                            <td>{{$client->cidade}}</td>

                            <td>{{$client->uf}}</td> --}}

                            <td>
                                <a href="{{route('editclient', $client->id)}}">
                                    <img src="{{asset('img/icone/edit.png')}}" width="20px" alt="editar item">
                                </a>
                            </td>
                            <form method="POST" action="{{route('destroyclient', $client->id)}}" onsubmit="return confirm('Deseja Remover? Esta ação não poderá ser desfeita.')">
                                @method('DELETE')
                                @csrf
                                <td>
                                    <button type="submit" class="border-0"><img src="{{asset('img/icone/recycle-bin.png')}}" width="20px" alt="apagar item">
                                    </button>
                                </td>
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
