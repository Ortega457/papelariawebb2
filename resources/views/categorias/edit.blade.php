@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <title>Editar Categoria</title>
</head>

<body>
    <h1>Editar Categoria</h1>

    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="{{ $categoria->nome }}" required>
        </div>

        <div>
            <button type="submit">Atualizar</button>
        </div>
    </form>

</body>

</html>
@endsection
