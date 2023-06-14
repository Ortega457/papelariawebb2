@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Criar Cliente</h1>
    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="d-flex justify-content-between">
            <div>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Voltar</a>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </div>
    </form>
</div>
@endsection
