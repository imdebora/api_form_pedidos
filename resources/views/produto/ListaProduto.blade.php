@extends('admin.subview.adminHeader')
@include('admin.subview.navbar')
@section('search')
    <div class="search-bar p-3 ">
        <form class="search-form d-flex align-items-center" method="GET" autocomplete="off">
            <input type="text" name="search" placeholder="Pesquisar Pacientes" title="Procurar Pacientes"><button type="submit"><i class="bi bi-search"></i></button>
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
                <h5 class="card-title text-center">Lista de Pacientes</h5>
                <table class="table table-striped table-hover table-scrollable">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Código</th>
                        <th scope="col">Preço</th>
                        <th scope="col">Preço Promocional</th>
                        <th scope="col">Unidade</th>
                        <th scope="col">GTIN</th>
                        <th scope="col">Tipo de Variação</th>
                        <th scope="col">Localização</th>
                        <th scope="col">Preço Custo</th>
                        <th scope="col">Preço Custo Médio</th>
                        <th scope="col">Situação</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Deletar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td> {{$product->nome}} </td>

                            <td> {{$product->codigo}} </td>

                            <td> {{$product->preco}} </td>

                            <td> {{$product->preco_promocional}} </td>

                            <td> {{$product->unidade}} </td>

                            <td> {{$product->gtin}} </td>
                            
                            <td> {{$product->tipoVariacao}} </td>
                            
                            <td> {{$product->localizacao}} </td>
                            
                            <td> {{$product->preco_custo}} </td>
                            
                            <td> {{$product->preco_custo_medio}} </td>
                            
                            <td> {{$product->situacao}} </td>

                            <td>
                                <a href="">
                                    <img src="{{asset('img/icone/edit.png')}}" width="20px" alt="editar item">
                                </a>
                            </td>
                            <form method="POST" action="" onsubmit="return confirm('Deseja Remover? Esta ação não poderá ser desfeita.')">
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
