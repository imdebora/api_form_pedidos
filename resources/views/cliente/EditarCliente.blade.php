@extends('admin.subview.adminHeader')
@include('admin.subview.navbar')
<section id="formulario">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title text-center">Formulário de Edição</h5>
                <form enctype="multipart/form-data"
                      method="POST"
                      action="">
                    @csrf
                    @method('PUT')
                        <div class="row mb-3">
                            <label for="codigo" class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo" class="form-control" value="{{$client->codigo}}"> </div>
                            @error('codigo')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Código Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="nome" class="form-control" value={{$client->nome}}></div>
                            @error('nome')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Nome Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="fantasia" class="col-sm-2 col-form-label">Fantasia</label>
                            <div class="col-sm-10">
                                <input type="text" name="fantasia" class="form-control" value="{{$client->fantasia}}"></div>
                        </div>
                        <div class="row mb-3">
                            <label for="tipo_pessoa" class="col-sm-2 col-form-label">Tipo de pessoa</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo_pessoa" class="form-control" value="{{$client->tipo_pessoa}}"></div>
                            @error('tipo_pessoa')
                            <small class="bg-danger text-white w-25 rounded" role="alert">CPF Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="cpf_cnpj" class="col-sm-2 col-form-label">CPF/CNPJ</label>
                            <div class="col-sm-10">
                                <input type="text" name="cpf_cnpj" class="form-control" value="{{$client->cpf_cnpj}}"></div>
                            @error('cpf_cnpj')
                            <small class="bg-danger text-white w-25 rounded" role="alert">CPF/CNPJ Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="cep" class="col-sm-2 col-form-label">CEP</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{$client->cep}}" type="text" id="cep" name="cep"
                                    onblur="pesquisacep(this.value);">
                                @error('cep')
                                <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="endereco" class="col-sm-2 col-form-label">Endereço</label>
                            <div class="col-sm-10"><input class="form-control" value="{{$client->endereco}}" type="text" id="rua" name="endereco">
                                @error('endereco')
                                <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="numero" class="col-sm-2 col-form-label">Número</label>
                            <div class="col-sm-10">
                                <input type="text" name="numero" class="form-control" value="{{$client->numero}}"></div>
                            @error('numero')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Número Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="complemento" class="col-sm-2 col-form-label">Complemento</label>
                            <div class="col-sm-10">
                                <input type="text" name="complemento" class="form-control" value="{{$client->complemento}}"></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="bairro" class="col-sm-2 col-form-label">Bairro</label>
                            <div class="col-sm-10">
                                <input type="text" name="bairro" class="form-control" value="{{$client->bairro}}"></div>
                            @error('bairro')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Bairro Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
                            <div class="col-sm-10"><input class="form-control" value="{{$client->cidade}}" type="text" id="cidade" name="cidade">
                                @error('cidade')
                                <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="uf" class="col-sm-2 col-form-label">UF</label>
                            <div class="col-sm-10">
                                <input type="text" name="uf" class="form-control" value="{{$client->uf}}"></div>
                            @error('uf')
                            <small class="bg-danger text-white w-25 rounded" role="alert">UF Inválida</small>
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
