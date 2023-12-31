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
                            <td class="right-align">

                                <a href="{{ route('admin.cidades.edit', $cidade->id) }}">
                                    <span>
                                        <i class="material-icons blue-text blue-accent-2">edit</i>
                                    </span>
                                </a>

                                <form action="{{route('admin.cidades.destroy',$cidade->id) }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')

                                    <button style="border:0;background:transparent;" type="submit">
                                        <span style="cursor: pointer">
                                            <i class="material-icons red-text text-accent-3">delete_forever</i>
                                        </span>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">Não existem cidades cadastradas</td>
                        </tr>
                    @endforelse
                </tbody>
            </thead>
        </table>
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.cidades.create')}}">
                <i class="large material-icons">add</i>
            </a>
        </div>
    </section>
@endsection


