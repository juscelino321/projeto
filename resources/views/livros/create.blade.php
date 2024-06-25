@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adicionar Livro</h1>
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="subtitulo">Subtítulo</label>
            <input type="text" name="subtitulo" class="form-control">
        </div>
        <div class="form-group">
            <label for="edicao">Edição</label>
            <input type="text" name="edicao" class="form-control">
        </div>
        <div class="form-group">
            <label for="editora">Editora</label>
            <input type="text" name="editora" class="form-control">
        </div>
        <div class="form-group">
            <label for="ano_publicacao">Ano de Publicação</label>
            <input type="number" name="ano_publicacao" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
@endsection
