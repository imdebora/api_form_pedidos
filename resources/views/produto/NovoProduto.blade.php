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
                <h5 class="card-title text-center">Novo Produto</h5>
                <form enctype="multipart/form-data"
                      method="POST"
                      action="">
                    @csrf
                    <div class="row mb-3">
                        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name="nome" class="form-control"></div>
                        @error('nome')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Nome Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="codigo" class="col-sm-2 col-form-label">Código</label>
                        <div class="col-sm-10">
                            <input type="text" name="codigo" class="form-control"></div>
                        @error('codigo')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Código Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="preco" class="col-sm-2 col-form-label">Preço</label>
                        <div class="col-sm-10">
                            <input type="text" name="preco" class="form-control"></div>
                        @error('preco')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Preço Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="preco_promocional" class="col-sm-2 col-form-label">Preço promocional</label>
                        <div class="col-sm-10">
                            <input type="text" name="preco_promocional" class="form-control"></div>
                        @error('preco_promocional')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Preço Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="unidade" class="col-sm-2 col-form-label">Unidade</label>
                        <div class="col-sm-10">
                            <input type="text" name="unidade" class="form-control"></div>
                        @error('unidade')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Unidade Inválida</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="gtin" class="col-sm-2 col-form-label">GTIN</label>
                        <div class="col-sm-10">
                            <input type="text" name="gtin" class="form-control"></div>
                        @error('gtin')
                        <small class="bg-danger text-white w-25 rounded" role="alert">GTIN Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="tipoVariacao" class="col-sm-2 col-form-label">Tipo Variação</label>
                        <div class="col-sm-10">
                            <input type="text" name="tipoVariacao" class="form-control"></div>
                        @error('tipoVariacao')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Variação Inválida</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="localizacao" class="col-sm-2 col-form-label">Localização</label>
                        <div class="col-sm-10">
                            <input type="text" name="localizacao" class="form-control"></div>
                        @error('localizacao')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Localização Inválida</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="preco_custo" class="col-sm-2 col-form-label">Preço Custo</label>
                        <div class="col-sm-10">
                            <input type="text" name="preco_custo" class="form-control"></div>
                        @error('preco_custo')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Preço Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="preco_custo_medio" class="col-sm-2 col-form-label">Preço Custo Médio</label>
                        <div class="col-sm-10">
                            <input type="text" name="preco_custo_medio" class="form-control"></div>
                        @error('preco_custo_medio')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Preço Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="situacao" class="col-sm-2 col-form-label">Situação</label>
                        <div class="col-sm-10">
                            <input type="text" name="situacao" class="form-control"></div>
                        @error('situacao')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Situação Inválida</small>
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
