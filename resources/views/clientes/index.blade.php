@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Lista de Clientes</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->id }}</td>
                        <td>{{ $cliente->nome }}</td>
                        <td>{{ $cliente->email }}</td>
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
