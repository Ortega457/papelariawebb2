@extends('layouts.app')

@section('content')
    <h1>Pedidos Confirmados</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Produto</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->cliente->nome }}</td>
                    <td>{{ $pedido->produto->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
