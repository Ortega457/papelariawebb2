@extends('layouts.app')

@section('content')
    <h1>Mensagens de Contato</h1>

    @if($contatos->isEmpty())
        <p>Nenhuma mensagem encontrada.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Mensagem</th>
                    <th>Data de Criação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contatos as $contato)
                    <tr>
                        <td>{{ $contato->id }}</td>
                        <td>{{ $contato->nome }}</td>
                        <td>{{ $contato->email }}</td>
                        <td>{{ $contato->texto }}</td>
                        <td>{{ $contato->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
