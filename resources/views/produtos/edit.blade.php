@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Editar Produto</title>
</head>

<body>
    <h1>Editar Produto</h1>

    <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $produto->nome }}" required>
        </div>

        <div>
            <label for="categoria_id">Categoria:</label>
            <select name="categoria_id" class="form-control" required>
                <option value="">Selecione uma Categoria</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $categoria->id == $produto->categoria_id ? 'selected' : '' }}>
                        {{ $categoria->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="valor">Valor:</label>
            <input type="text" name="valor" id="valor" value="{{ $produto->valor }}" required>
        </div>

        <div>
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" id="descricao" value="{{ $produto->descricao }}" required>
        </div>

        <div>
            <label for="imagem">Imagem:</label>
            <input type="url" name="imagem" id="imagem" value="{{ $produto->imagem }}" required>
        </div>

        <div>
            <button type="submit">Atualizar</button>
        </div>
    </form>

</body>

</html>
@endsection
