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
                        <th scope="col">Número</th>
                        <th scope="col">Data do Pedido</th>
                        <th scope="col">Data Prevista de Entrega</th>
                        <th scope="col">Valor Total</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($purchases as $purchase)
                        <tr>
                            <td> {{$purchase->numero}} </td>

                            <td> {{$purchase->data_pedido}} </td>

                            <td> {{$purchase->data_previsao_entrega}} </td>
                            
                            <td> {{$purchase->valor_total}} </td>

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
