@extends('admin.subview.adminHeader')
@include('admin.subview.navbar')
<body>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous"></script>
    <script src="{{asset('js/admin/viacep.js')}}"></script>
</head>

<section id="formulario">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                {{-- @if(!empty())
                    <div class="text-white alert alert-success bg-success text-center"></div>
                @endif --}}
                <h5 class="card-title text-center">Novo Pedido</h5>
                <form enctype="multipart/form-data"
                      method="POST"
                      action="">
                    @csrf
                    <div class="row mb-3">
                        <label for="numero" class="col-sm-2 col-form-label">Número</label>
                        <div class="col-sm-10">
                            <input type="text" name="numero" class="form-control"></div>
                        @error('numero')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Número Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="data_pedido" class="col-sm-2 col-form-label">Data do Pedido</label>
                        <div class="col-sm-10">
                            <input type="date" name="data_pedido" class="form-control"></div>
                        @error('data_pedido')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Data Inválida</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="datya_previsao_pedido" class="col-sm-2 col-form-label">Data Prevista de Entrega</label>
                        <div class="col-sm-10">
                            <input type="date" name="datya_previsao_pedido" class="form-control"></div>
                        @error('datya_previsao_pedido')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Data Inválida</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="valor_total" class="col-sm-2 col-form-label">Valor Total</label>
                        <div class="col-sm-10">
                            <input type="text" name="valor_total" class="form-control"></div>
                        @error('valor_total')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Valor Inválido</small>
                        @enderror
                    </div>

                    <div class="text-center">
                        <div class="">
                            <button type="submit" class="btn bg-success text-light">Confirmar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
</body>
