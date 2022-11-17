@extends('admin.subview.adminheader')
@section('adminDashboard')
    @include('admin.subview.navbar')
    <main id="main" class="main">
        <div class="pagetitle">
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item "><a href="/" class="text-white">Home</a></li>
                    <li class="breadcrumb-item active text-white"><a href="">Dashboard</a></li>
                </ol>
            </nav>
        </div>
        <section class="section dashboard">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row table-admin-fundo">
                        <div class="col-xxl-4 col-md-6  card-padding">
                            <div class="card info-card sales-card">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Atendimento</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{asset('img/icone/lista-de-desejos.png')}}" width="30px"
                                                 alt="lista"></div>
                                        <div class="ps-3">
                                            <p><b> Total de Atendimentos</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-md-6 card-padding">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Dados</h5>
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <img src="{{asset('img/icone/people.png')}}" width="30px"
                                                 alt="icone-cifrao"></div>
                                        <div class="ps-3">
                                            <h6 class="text-dark">
                                                Informações </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert-button">
                            <a href="{{route('newpurchase')}}"><button class="button-alert-admin">Agendar Pedidos</button></a>
                        </div>
                        <div class="alert-button">
                            <a href="{{route('productlist')}}"><button class="button-alert-admin">Ver Produtos</button></a>
                        </div>
                        <div class="col-xxl-4 col-xl-12  card-padding">
                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <h5 class="card-title">Clientes</h5>
                                    <div class="d-flex align-items-center">
                                        <img src="{{asset('img/icone/diversity.png')}}" width="50px"
                                             alt="clientes-icone">
                                        <div class="ps-3">
                                            <b><p class="text-dark">Atualmente Temos {{$id = 0}} Clientes
                                                    Registrados</p></b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-12">
                            <div class="card recent-sales overflow-auto table-admin">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Ultimas Consultas</h5>
                                    <table class="table table-borderless datatable">
                                        <thead>
                                        <tr class="table-admin-head">
                                            <th scope="col">ID</th>
                                            <th scope="col">Paciente ID</th>
                                            <th scope="col">Médico ID</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($lastDataByDate))
                                            @foreach($lastDataByDate as $data)
                                                @if($loop->odd)
                                                    <tr class="table-secondary">
                                                        @endif
                                                        <th scope="row">{{$data['id']}}</th>
                                                        <td>{{$data['user_name']}}</td>
                                                        <td>R$ {{number_format($data['total'],2,",",".")}}</td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card top-selling overflow-auto table-admin">
                                <div class="card-body pb-0">
                                    <h5 class="card-title text-dark">Últimos Cadastros</h5>
                                    <table class="table table-borderless">
                                        <thead>
                                        <tr class="table-admin-head">
                                            <th scope="col">Nota ID</th>
                                            <th scope="col">Informacao</th>
                                            <th scope="col">Informacao</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($lastDataByTotal))
                                            @foreach($lastDataByTotal as $data)
                                                @if($loop->odd)
                                                    <tr class="table-secondary">
                                                        @endif
                                                        <th scope="row">{{$data['id']}}</th>
                                                        <td>{{$data['user_name']}}</td>
                                                        <td>R$ {{number_format($data['total'],2,",",".")}}</td>
                                                    </tr>
                                                    @endforeach
                                                @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-lg-4 info-padding">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Atividades Recentes</h5>
                            <div class="activity">
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
    </main>
@endsection
