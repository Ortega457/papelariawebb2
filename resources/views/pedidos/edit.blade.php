@extends('layouts.app')

@section('content')
    <h1>Editar Pedido</h1>

    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="cliente">Cliente:</label>
        <select name="cliente" id="cliente">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}" {{ $pedido->cliente->id == $cliente->id ? 'selected' : '' }}>{{ $cliente->nome }}</option>
            @endforeach
        </select>

        <label for="produto">Produto:</label>
        <select name="produto" id="produto">
            @foreach ($produtos as $produto)
                <option value="{{ $produto->id }}" {{ $pedido->produto->id == $produto->id ? 'selected' : '' }}>{{ $produto->nome }}</option>
            @endforeach
        </select>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="{{ $pedido->quantidade }}" required>

        <div class="total-pedido">
            <label for="total_pedido">Total do Pedido:</label>
            <span id="total_pedido">{{ $pedido->total_pedido }}</span>
        </div>

        <button type="submit">Atualizar Pedido</button>
    </form>

    <script>
        // Atualiza o valor total do pedido com base na quantidade selecionada
        document.getElementById('quantidade').addEventListener('input', function() {
            var quantidade = this.value;
            var valorUnitario = {{ $pedido->produto->valor }};
            var totalPedido = quantidade * valorUnitario;

            document.getElementById('total_pedido').textContent = totalPedido.toFixed(2);
        });
    </script>
@endsection
