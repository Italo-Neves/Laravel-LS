@extends('Admin.layouts.principal')

@section('conteudo-principal')

<section class="section">
    {{-- mostrando lista de erros 
    @if ($errors->any())
        <div class="red-text">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    --}}
    <form action="{{$action}}" method="POST">
        
        {{-- Cross-site request forgery csrf --}}
        @csrf
        @isset($cidade)
            @method('PUT')
        @endisset

        <div class="input-field">
            <input type="text" name="nome" id="nome" value="{{ old('nome', $cidade->nome ?? '') }}"/> {{-- ?? -> operador de coalescência verifica se o nome já existe caso ele não exista ele retorna o dado a direita  --}}
            <label for="nome">Nome</label>
            {{-- Mostrando erro por campo --}}
            @error('nome')
                <span class="red-text text-accent-3"><small>{{$message}}</small></span>
            @enderror
        </div>
        <div class="right-align">
            <a class="btn-flat waves-effect" href="{{route('admin.cidades.index')}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">
                Salvar
            </button>
        </div>
    </form>
</section>

@endsection