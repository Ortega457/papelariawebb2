<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function create()
    {
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
        ]);

        Categoria::create([
            'nome' => $request->input('nome'),
        ]);

        // Redirecionar ou retornar uma resposta de sucesso
        return redirect()->route('categorias.index')->with('success', 'Categoria criado com sucesso!');
    }

    public function index()
    {
        $categorias = Categoria::all();
    
        return view('categorias.index', compact('categorias'));
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', compact('categoria'));
    }

    public function update(Request $request, Categoria $categoria)
    {
        // Validação dos campos de entrada
        $request->validate([
            'nome' => 'required',
        ]);
        
        // Atualização do produto no banco de dados
        $categoria->nome = $request->nome;
        $categoria->save();
        
        return redirect()->route('categorias.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
    
        return redirect()->route('categorias.index')->with('success', 'Categoria excluído com sucesso!');
    }
}
