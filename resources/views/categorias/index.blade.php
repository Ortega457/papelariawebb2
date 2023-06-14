@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Categorias</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        /* Seu estilo personalizado aqui */
        .container {
            text-align: center;
        }
        table {
            margin: 0 auto;
            text-align: left;
        }
        .actions {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Categorias</h1>

        <table class="table">
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
                            <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
@endsection
