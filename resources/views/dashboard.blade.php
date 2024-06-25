@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button>
                        <a href="/criar-livros">Criar Livros</a>
                    </button>

                    <table>
                        <thead>
                            <tr>
                                <th>Autor</th>
                                <th>titulo</th>
                                <th>subtitulo</th>
                                <th>edição</th>
                                <th>editora</th>
                                <th>ano de publicação</th>
                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($livros as $li)
                                <tr>
                                    <th>{{ $li->autor }}</th>
                                    <th>{{ $li->titulo }}</th>
                                    <th>{{ $li->subtitulo }}</th>
                                    <th>{{ $li->edicao }}</th>
                                    <th>{{ $li->editora }}</th>
                                    <th>{{ $li->ano_publicacao }}</th>
                                    <th>
                                        <a href="/editar-livros/{{ $li->id }}"><button>Editar</button></a>
                                        <a href="/deletar-livros/{{ $li->id }}"><button>deletar</button></a>

                                    </th>
                                </tr>
                                {{-- @dd($livros) --}}
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
