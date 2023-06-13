@extends('layouts.app')

@section('content')
    <h1>Pedidos</h1>

    <table>
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
                        <a href="{{ route('pedidos.edit', $pedido->id) }}">Editar</a>
                        <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
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
