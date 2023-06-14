@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Pedidos</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Total do Pedido</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pedidos as $pedido)
                    <tr>
                        <td>{{ $pedido->id }}</td>
                        <td>{{ $pedido->cliente->nome }}</td>
                        <td>{{ $pedido->produto->nome }}</td>
                        <td>{{ $pedido->quantidade }}</td>
                        <td>{{ $pedido->total_pedido }}</td>
                        <td>
                            <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
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
