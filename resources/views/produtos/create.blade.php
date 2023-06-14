@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Criar Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" class="form-control" required>
                <option value="">Selecione uma Categoria</option>
                @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="imagem">Imagem:</label>
            <input type="url" name="imagem" id="imagem" class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </div>
    </form>
</div>
@endsection
