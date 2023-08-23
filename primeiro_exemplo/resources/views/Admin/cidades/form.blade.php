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
    <form action="{{route('admin.cidades.adicionar')}}" method="POST">
        
        {{-- Cross-site request forgery csrf --}}
        @csrf

        <div class="input-field">
            <input type="text" name="nome" id="nome"/>
            <label for="nome">Nome</label>
            {{-- Mostrando erro por campo --}}
            @error('nome')
                <span class="red-text text-accent-3"><small>{{$message}}</small></span>
            @enderror
        </div>
        <div class="right-align">
            <a class="btn-flat waves-effect" href="{{url()->previous()}}">Cancelar</a>
            <button class="btn waves-effect waves-light" type="submit">
                Salvar
            </button>
        </div>
    </form>
</section>

@endsection