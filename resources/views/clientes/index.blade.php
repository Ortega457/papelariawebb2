@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $clientes)
                <tr>
                    <td>{{ $clientes->id }}</td>
                    <td>{{ $clientes->nome }}</td>
                    <td>{{ $clientes->email }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection