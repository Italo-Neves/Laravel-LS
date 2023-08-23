@extends('Admin.layouts.principal')

@section('conteudo-principal')
    <section class="section" >
        <table class="highlight">
            <thead>
                <tr>
                    <th>Cidades</th>
                    <th class="right-align" >Opções</th>
                </tr>

                <tbody>
                    @forelse ($cidades as $cidade)
                        <tr>
                            <td>{{$cidade->nome}}</td>
                            <td class="right-align">Excluir - Remover</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Não existem cidads cadastrads</td>
                        </tr>
                    @endforelse
                </tbody>
            </thead>
        </table>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.cidades.form')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </section>
@endsection

