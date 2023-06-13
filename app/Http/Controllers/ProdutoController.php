<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create()
    {
        $categorias = Categoria::all();
        return view('produtos.create', compact('categorias'));
    }

    public function index()
    {
        $categorias = Categoria::all();
        $produtos = Produto::all();

        return view('produtos.index', compact('produtos', 'categorias'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'categoria_id' => 'required|exists:categorias,id',
            'valor' => 'required',
            'descricao' => 'required',
            'imagem' => 'required|url',
        ]);

        Produto::create([
            'nome' => $request->input('nome'),
            'categoria_id' => $request->input('categoria_id'),
            'valor' => $request->input('valor'),
            'descricao' => $request->input('descricao'),
            'imagem' => $request->input('imagem'),
        ]);

        return redirect()->route('produtos.index')->with('success', 'Cliente criado com sucesso!');
    }



    public function edit(Produto $produto)
    {
        $categorias = Categoria::all();
        return view('produtos.edit', compact('produto', 'categorias'));
    }

    public function update(Request $request, Produto $produto)
    {
        // Validação dos campos de entrada
        $request->validate([
            'nome' => 'required',
            'categoria_id' => 'required',
            'valor' => 'required',
            'descricao' => 'required',
            'imagem' => 'required',
        ]);
        
        // Atualização do produto no banco de dados
        $produto->nome = $request->nome;
        $produto->categoria_id = $request->categoria_id;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->imagem = $request->imagem;
        $produto->save();
        
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }
    
    public function destroy(Produto $produto)
    {
        $produto->delete();
    
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
    
}