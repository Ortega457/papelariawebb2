@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Criar Produtos</title>
</head>

<body>
    <h1>Criar Produto</h1>

    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>

        <div>
            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" class="form-control" required>
                <option value="">Selecione uma Categoria</option>
                @foreach ($categorias as $categorias)
                <option value="{{ $categorias->id }}">{{ $categorias->nome }}</option>
                @endforeach
            </select>
        </div>
        
        <div>
            <label for="valor">Valor:</label>
            <input type="number" name="valor" id="valor" required>
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" required>
        </div>

        <div>
            <label for="imagem">Imagem:</label>
            <input type="url" name="imagem" id="imagem" required>
        </div>

        <div>
            <button type="submit">Criar</button>
        </div>

    </form>

</body>

</html>
@endsection