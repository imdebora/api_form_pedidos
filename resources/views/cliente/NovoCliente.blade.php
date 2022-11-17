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
                <h5 class="card-title text-center">Novo Cliente</h5>
                <form enctype="multipart/form-data"
                      method="POST"
                      action="">
                    @csrf
                    <div class="row mb-3">
                        <label for="codigo" class="col-sm-2 col-form-label">Código</label>
                        <div class="col-sm-10">
                            <input type="number" name="codigo" class="form-control"></div>
                        @error('codigo')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Código Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" name="nome" class="form-control"></div>
                        @error('nome')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Nome Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="fantasia" class="col-sm-2 col-form-label">Fantasia</label>
                        <div class="col-sm-10">
                            <input type="text" name="fantasia" class="form-control"></div>
                         @error('fantasia')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Fantasia Inválida</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="tipo_pessoa" class="col-sm-2 col-form-label">Tipo de Pessoa</label>
                        <div class="col-sm-10">
                            <input type="text" name="tipo_pessoa" class="form-control"></div>
                        @error('tipo_pessoa')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Tipo Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="cpf_cnpj" class="col-sm-2 col-form-label">CPF/CNPJ</label>
                        <div class="col-sm-10">
                            <input type="text" name="cpf_cnpj" class="form-control"></div>
                        @error('cpf_cnpj')
                        <small class="bg-danger text-white w-25 rounded" role="alert">CPF/CNPJ Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="cep" class="col-sm-2 col-form-label">CEP</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="cep" name="cep"
                                   onblur="pesquisacep(this.value);">
                            @error('cep')
                            <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row mb-3">
                        <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
                        <div class="col-sm-10"><input class="form-control" type="text" id="rua" name="endereco">
                            @error('endereco')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Endereço Inválido</small>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="numero" class="col-sm-2 col-form-label">Número</label>
                        <div class="col-sm-10">
                            <input type="number" name="numero" class="form-control"></div>
                        @error('numero')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Número Inválido</small>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <label for="complemento" class="col-sm-2 col-form-label">Complemento</label>
                        <div class="col-sm-10">
                            <input type="text" name="complemento" class="form-control"></div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
                        <div class="col-sm-10">
                            <input type="text" name="bairro" class="form-control" id="bairro"></div>
                        @error('bairro')
                        <small class="bg-danger text-white w-25 rounded" role="alert">Bairro Inválido</small>
                        @enderror
                    </div>
                    
                    <div class="row mb-3">
                        <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
                        <div class="col-sm-10"><input class="form-control" type="text" id="cidade" name="cidade">
                            @error('cidade')
                            <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="uf" class="col-sm-2 col-form-label">UF</label>
                        <div class="col-sm-10"><input class="form-control" type="text" id="uf" name="uf">
                            @error('uf')
                            <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                            @enderror
                        </div>
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
