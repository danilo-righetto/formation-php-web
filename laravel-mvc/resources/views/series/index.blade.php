<x-layout title="Séries" :mensagem-sucesso="$mensagemSucesso">
    @auth
    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>
    @endauth

    <ul class="list-group item d-flex justify-content-between align-items-center">
        @foreach ($series as $serie)
        <li class="list-group-item">
            @auth<a href="{{ route('seasons.index', $serie->id) }}" target="_blank" rel="noopener noreferrer">@endauth
                {{ $serie->nome }}
                @auth</a>@endauth
            @auth
            <span class="d-flex">
                <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary btn-sm">E</a>
                <form action="{{route('serie.destroy', $serie->id)}}" method="post" class="ms-2">
                    @csrf
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </span>
            @endauth
        </li>
        @endforeach
    </ul>
</x-layout>
