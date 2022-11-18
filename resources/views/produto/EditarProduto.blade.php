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
                            <label for="nome" class="col-sm-2 col-form-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" name="nome" class="form-control" value="{{$product->nome}}"></div>
                            @error('nome')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Nome Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="codigo" class="col-sm-2 col-form-label">Código</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo" class="form-control" value="{{$product->codigo}}"></div>
                            @error('codigo')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Código Inválido</small>
                            @enderror
                        </div>
                        <div class="row mb-3">
                            <label for="preco" class="col-sm-2 col-form-label">Preço</label>
                            <div class="col-sm-10">
                                <input type="text" name="preco" class="form-control" value="{{$product->preco}}"></div>
                            @error('preco')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Preço Inválido</small>
                            @enderror
                        </div>
                            <div class="row mb-3">
                                <label for="preco_promocional" class="col-sm-2 col-form-label">Preço Promocional</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="preco_promocional" class="form-control" value="{{$product->preco_promocional}}"></div>
                                @error('preco_promocional')
                                <small class="bg-danger text-white w-25 rounded" role="alert">Preço Inválido</small>
                                @enderror
                            </div>
                        <div class="row mb-3">
                            <label for="unidade" class="col-sm-2 col-form-label">Unidade</label>
                            <div class="col-sm-10">
                                <input type="tel" name="unidade" class="form-control" value="{{$product->unidade}}"></div>
                            @error('unidade')
                            <small class="bg-danger text-white w-25 rounded" role="alert">Unidade Inválida</small>
                            @enderror
                        </div>
                            <div class="row mb-3">
                                <label for="gtin" class="col-sm-2 col-form-label">GTIN</label>
                                <div class="col-sm-10">
                                    <input type="tel" name="gtin" class="form-control" value="{{$product->gtin}}"></div>
                                @error('gtin')
                                <small class="bg-danger text-white w-25 rounded" role="alert">GTIN Inválido</small>
                                @enderror
                            </div>

                        <div class="row mb-3">
                            <label for="tipoVariacao" class="col-sm-2 col-form-label">Tipo de Variação</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="tipoVariacao" value="{{$product->tipoVariacao}}">
                                @error('tipoVariacao')
                                <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="localizacao" class="col-sm-2 col-form-label">Localização</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="localizacao"  value="{{$product->localizacao}}">
                                @error('localizacao')
                                <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="preco_custo" class="col-sm-2 col-form-label">Preço Custo</label>
                            <div class="col-sm-10"><input class="form-control" type="text" name="preco_custo" value="{{$product->preco_custo}}">
                                @error('preco_custo')
                                <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="preco_custo_medio" class="col-sm-2 col-form-label">Preço Custo Médio</label>
                            <div class="col-sm-10"><input class="form-control" type="text" name="preco_custo_medio" value="{{$product->preco_custo_medio}}">
                                @error('preco_custo_medio')
                                <small class="bg-danger text-white w-25 rounded" role="alert"></small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="situacao" class="col-sm-2 col-form-label">Situação</label>
                            <div class="col-sm-10"><input class="form-control" type="text" name="situacao" value="{{$product->situacao}}">
                                @error('situacao')
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
