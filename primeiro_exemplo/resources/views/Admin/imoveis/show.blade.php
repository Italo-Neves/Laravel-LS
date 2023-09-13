@extends('admin.layouts.principal')

@section('conteudo-principal')
<h4>{{ $imovel->titulo }}</h4>
<section class="section">
    <div class="section">

        <div class="row">
            <span class="col s12">
                <h5>Cidade</h5>
                <p>{{ $imovel->cidade->nome }}</p>
            </span>
        </div>

        <div class="row">
            <span class="col s12">
                <h5>Tipo de imóvel</h5>
                <p>{{ $imovel->tipo->nome }}</p>
            </span>
        </div>

        <div class="row">
            <span class="col s12">
                <h5>Finalidade</h5>
                <p>{{ $imovel->finalidade->nome }}</p>
            </span>
        </div>

        <div class="row">
            <span class="col s4">
                <h5>Preço</h5>
                <p>{{ $imovel->preco }}</p>
            </span>

            <span class="col s4">
                <h5>Dormitórios</h5>
                <p>{{ $imovel->dormitorios }}</p>
            </span>

            <span class="col s4">
                <h5>Quantidade de salas</h5>
                <p>{{ $imovel->salas }}</p>
            </span>
        </div>

        <div class="row">
            <span class="col s4">
                <h5>Terreno (m)</h5>
                <p>{{ $imovel->terreno }}</p>
            </span>

            <span class="col s4">
                <h5>Banheiros</h5>
                <p>{{ $imovel->dormitorios }}</p>
            </span>

            <span class="col s4">
                <h5>Garagens</h5>
                <p>{{ $imovel->garagens }}</p>
            </span>
        </div>
        
        {{-- Pontos de interesse nas proximidades --}}
        <div class="row">
            <span class="col s12">
                <h5>Pontos de interesse nas proximidades</h5>
                <div style="display: flex; flex-wrap: wrap;">
                    @foreach ($imovel->proximidades as $proximidade)
                        <span style="margin-right:25px;font-weight: 600;">{{$proximidade->nome}}</span>
                    @endforeach
                </div>
            </span>
        </div>

        {{-- Endereço --}}
        <div class="row">
            <span>
                <h5>Endereço</h5>
                <p>
                    {{$imovel->endereco->rua}}, nº{{ $imovel->endereco->numero }} {{ $imovel->endereco->complemento }}, {{ $imovel->endereco->bairro }}.
                </p>
            </span>
        </div>

        <div class="row">
            <span class="col s12">
                <h5>Descrição</h5>
                <p>{{ $imovel->descricao }}</p>
            </span>
        </div>
        {{-- Voltar --}}
        <div class="right-align">
            <a href="{{ url()->previous() }}" class="btn-flat waves-effect">Voltar</a>
        </div>
    </div>
</section>
@endsection