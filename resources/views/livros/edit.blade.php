@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Editar Livro</h1>
    <form action="/editar-livros/{{ $livro->id }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" class="form-control" value="{{ $livro->autor }}" required>
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" value="{{ $livro->titulo }}" required>
        </div>
        <div class="form-group">
            <label for="subtitulo">Subtítulo</label>
            <input type="text" name="subtitulo" class="form-control" value="{{ $livro->subtitulo }}">
        </div>
        <div class="form-group">
            <label for="edicao">Edição</label>
            <input type="text" name="edicao" class="form-control" value="{{ $livro->edicao }}">
        </div>
        <div class="form-group">
            <label for="editora">Editora</label>
            <input type="text" name="editora" class="form-control" value="{{ $livro->editora }}">
        </div>
        <div class="form-group">
            <label for="ano_publicacao">Ano de Publicação</label>
            <input type="number" name="ano_publicacao" class="form-control" value="{{ $livro->ano_publicacao }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
</div>
@endsection
