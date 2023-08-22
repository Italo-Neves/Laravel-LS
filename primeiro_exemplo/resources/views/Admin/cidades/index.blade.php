@extends('Admin.layouts.principal')

@section('conteudo-principal')
    <section>
        <table>
            <thead>
                <tr>
                    <th>Cidades</th>
                    <th>Opções</th>
                </tr>

                <tbody>
                    @forelse ($cidades as $cidade)
                        <tr>
                            <td>{{$cidade}}</td>
                            <td>Excluir - Remover</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Não existem cidads cadastrads</td>
                        </tr>
                    @endforelse
                </tbody>
            </thead>
        </table>
    </section>
@endsection

