@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">Mensagens de Contato</h1>

    @if($contatos->isEmpty())
        <p class="text-center">Nenhuma mensagem encontrada.</p>
    @else
        <table class="table">
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
</div>

<script>
    
    document.addEventListener('DOMContentLoaded', function() {
        
        var tableRows = document.querySelectorAll('.table tbody tr');
        tableRows.forEach(function(row, index) {
            row.style.animationDelay = (index * 0.2) + 's';
            row.classList.add('fade-in');
        });
    });
</script>

<style>
    
    .fade-in {
        animation-name: fadeIn;
        animation-duration: 0.5s;
        animation-fill-mode: forwards;
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(10px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
@endsection
