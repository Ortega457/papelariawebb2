@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Painel Administrativo</h1>

        <div class="list-group">
            <a href="{{ route('clientes.create') }}" class="list-group-item list-group-item-action">Adicionar Cliente</a>
            <a href="{{ route('clientes.index') }}" class="list-group-item list-group-item-action">Verificar Clientes</a>
            <a href="{{ route('produtos.create') }}" class="list-group-item list-group-item-action">Adicionar Produto</a>
            <a href="{{ route('produtos.index') }}" class="list-group-item list-group-item-action">Verificar Produtos</a>
            <a href="{{ route('categorias.create') }}" class="list-group-item list-group-item-action">Adicionar Categoria</a>
            <a href="{{ route('categorias.index') }}" class="list-group-item list-group-item-action">Verificar Categoria</a>
            <a href="{{ route('pedidos.pedidos') }}" class="list-group-item list-group-item-action">Verificar os Pedidos</a>
            <a href="{{ route('papelaria.mensagens') }}" class="list-group-item list-group-item-action">Verificar Mensagens de Contato</a>
        </div>
    </div>
@endsection
