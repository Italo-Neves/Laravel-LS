@extends('Admin.layouts.principal')

@section('conteudo-principal')

<section class="section">
    <table class="highlight">
        <thead>
            <tr>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Título</th>
                <th class="right-align">Opções</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($imoveis as $imovel)
                <tr>
                    <td>{{ $imovel->cidade->nome }}</td>
                    <td>{{ $imovel->endereco->bairro }}</td>
                    <td>{{ $imovel->titulo }}</td>

                    <td class="right-align"> 
                        {{-- fotos --}}                        
                        <a href="{{ route('admin.imoveis.fotos.index', $imovel->id) }}" title="fotos">
                            <span>
                                <i class="material-icons green-text text-lighten-1">insert_photo</i>
                            </span>
                        </a>

                        {{-- ver --}}                        
                        <a href="{{ route('admin.imoveis.show', $imovel->id) }}" title="ver">
                            <span>
                                <i class="material-icons indigo-text blue-darken-2">remove_red_eye</i>
                            </span>
                        </a>
                        {{-- editar --}}
                        <a href="{{ route('admin.imoveis.edit', $imovel->id) }}" title="editar">
                            <span>
                                <i class="material-icons blue-text blue-accent-2">edit</i>
                            </span>
                        </a>
                        {{-- remover --}}
                        <form action="{{route('admin.imoveis.destroy',$imovel->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')

                            <button style="border:0;background:transparent;" type="submit" title="remover">
                                <span style="cursor: pointer">
                                    <i class="material-icons red-text text-accent-3">delete_forever</i>
                                </span>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Não existem imóveis cadastrados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.imoveis.create')}}">
            <i class="large material-icons">add</i>
        </a>
    </div>
    
</section>
    
@endsection