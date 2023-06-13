@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
</head>
<body>
    <h1>Lista de Categorias</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                    <td class="actions">
                        <a href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
                        <form  action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection
