@extends('layouts.app')

@section('content')
    <h1>Novo Pedido</h1>

    <p>ID do Produto Selecionado: {{ $produto->nome }}</p>

    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf

        <input type="hidden" name="produto_id" value="{{ $produto->id }}">

        <label for="cliente">Cliente:</label>
        <select name="cliente" id="cliente">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
            @endforeach
        </select>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>

        <div class="total-pedido">
            <label for="total_pedido">Total do Pedido:</label>
            <span id="total_pedido"></span>
        </div>

        <button type="submit">Comprar</button>
    </form>

    <script>
        // Atualiza o valor total do pedido com base na quantidade selecionada
        document.getElementById('quantidade').addEventListener('input', function() {
            var quantidade = this.value;
            var valorUnitario = {{ $produto->valor }};
            var totalPedido = quantidade * valorUnitario;

            document.getElementById('total_pedido').textContent = totalPedido.toFixed(2);
        });
    </script>
@endsection
