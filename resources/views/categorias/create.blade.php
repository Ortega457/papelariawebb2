@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Criar Categoria</h1>

    <form action="{{ route('categorias.store') }}" method="POST" class="needs-validation" novalidate>
        @csrf

        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
            <div class="invalid-feedback">Por favor, insira o nome da categoria.</div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="btnCriar">Criar</button>
        </div>
    </form>
</div>

<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Sucesso!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Categoria adicionada com sucesso!
            </div>
        </div>
    </div>
</div>

@endsection

@section('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
<style>
    body {
        font-family: Arial, sans-serif;
    }
</style>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    // Exibe o modal de sucesso ao enviar o formulário
    document.addEventListener('DOMContentLoaded', function() {
        var btnCriar = document.getElementById('btnCriar');
        btnCriar.addEventListener('click', function(event) {
            event.preventDefault();
            $('#successModal').modal('show');
        });
    });
</script>
@endsection
