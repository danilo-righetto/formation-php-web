<x-layout title="Episodios" :mensagem-sucesso="$mensagemSucesso">
    @isset($mensagemSucesso)
    <div class="alert alert-success">
        {{ $mensagemSucesso }}
    </div>
    @endisset
    <form method="post">
        @csrf
        <ul class="list-group">
            @foreach ($episodes as $episode)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                Episódio {{ $episode->number }}

                <input type="checkbox" name="episodes[]" id="{{ $episode->id }}" value="{{ $episode->id }}" @if ($episode->watched) checked @endif />
            </li>
            @endforeach
        </ul>
        <button class="btn btn-primary mt-2 mb-2">Salvar</button>
    </form>
</x-layout>
