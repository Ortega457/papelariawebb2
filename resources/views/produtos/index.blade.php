@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Lista de Produtos</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Categoria</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Imagem</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->id }}</td>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->categoria->nome }}</td>
                        <td>R$ {{ $produto->valor }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>
                            <img src="{{ $produto->imagem }}" alt="Imagem do Produto" style="width: 100px; height: 100px;">
                        </td>
                        <td>
                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline;">
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
    <div class="text-center">
        <a href="{{ route('home') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection
