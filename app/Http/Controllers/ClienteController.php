<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function create()
    {
        return view('clientes.create');
    }

    public function index()
    {
        $clientes = Cliente::all();
    
        return view('clientes.index', compact('clientes'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
        ]);

        Cliente::create([
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
        ]);

        // Redirecionar ou retornar uma resposta de sucesso
        return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
    }
}
