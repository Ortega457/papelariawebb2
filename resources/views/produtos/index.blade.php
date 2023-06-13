@extends('layouts.app')

@section('content')
    <h1>Lista de Produtos</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Categoria</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th>Imagem</th>
                <th>Ações</th> <!-- Nova coluna para as ações -->
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->categoria->nome }}</td>
                    <td>{{ $produto->valor }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>
                        <img src="{{ $produto->imagem }}" alt="Imagem do Produto" style="width: 100px; height: 100px;">
                    </td>
                    <td>
                        <a href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                        <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
