@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-semibold mb-4">Meus Livros</h1>
        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        <table class="table-auto w-full border-collapse border border-red-500">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-red-500">Autor</th>
                    <th class="px-4 py-2 border border-red-500">Título</th>
                    <th class="px-4 py-2 border border-red-500">Subtítulo</th>
                    <th class="px-4 py-2 border border-red-500">Edição</th>
                    <th class="px-4 py-2 border border-red-500">Editora</th>
                    <th class="px-4 py-2 border border-red-500">Ano de Publicação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($livros as $livro)
                    <tr>
                        <td class="border border-red-500 px-4 py-2">{{ $livro->autor }}</td>
                        <td class="border border-red-500 px-4 py-2">{{ $livro->titulo }}</td>
                        <td class="border border-red-500 px-4 py-2">{{ $livro->subtitulo }}</td>
                        <td class="border border-red-500 px-4 py-2">{{ $livro->edicao }}</td>
                        <td class="border border-red-500 px-4 py-2">{{ $livro->editora }}</td>
                        <td class="border border-red-500 px-4 py-2">{{ $livro->ano_publicacao }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
